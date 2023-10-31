<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="cadastrarUsuario.css">
    <title>Cadastar-se</title>
</head>
<header>
    <img src="imagens/logo.png" alt="" class="logo">
    <p>A fotografia tem o poder de eternizar a efemeridade</p>
    <nav class="topnav">
        <a class="botaoM" href="home.html">Home</a>
        <a class="botaoM" href="sobreNos.html">Sobre nós</a>
        <a class="botaoM" href="galeriaDeFotos.html">Galeria de fotos</a>
        <a class="botaoM" href="cadastrarContato.html">Entre em contato</a>
        <a class="botaoM" href="cadastrarEvento.html">Eventos</a>
        <a class="botaoM" href="cadastrarRevelacao.html">Revelações</a>
        <a class="botaoM" href="fazerLogin.html">Login</a>
    </nav>
</header>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Conectar ao banco de dados (substitua com suas credenciais)
        $conexao = new mysqli('127.0.0.1', 'root', '', 'hsfotografias');

        // Verificar a conexão
        if ($conexao->connect_error) {
            die("<h3>Erro de conexão: " . $conexao->connect_error . "</h3>");
        }

        // Recuperar dados do formulário
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        // Verificar se o email já está em uso
        $verificar_email = "SELECT * FROM usuario WHERE email_usu = '$email'";
        $resultado = $conexao->query($verificar_email);

        if ($resultado->num_rows > 0) {
            echo "<h3 style='margin: 10%'>Este email já está em uso. Por favor, escolha outro email.</h3>";
        } else {
            // Inserir usuário no banco de dados (substitua com sua estrutura de tabela)
            $sql = "INSERT INTO usuario VALUES (null, '$nome', '$email', '$senha')";

            if ($conexao->query($sql) === TRUE) {
                echo "<h3 style='margin: 10%'>Usuário cadastrado com sucesso.</h3>";
            } else {
                echo "<h3 style='margin: 10%'>Erro ao cadastrar usuário: " . $conexao->error . "</h3>";
            }
        }

        // Fechar a conexão
        $conexao->close();
    }
    ?>
</body>

<footer>
    <a class="linkI" href="https://www.instagram.com/hilarysouzafotografias/"><img src="imagens/logoInsta.png" alt="" class="logoInsta"></a>
    <a class="linkI" href="https://www.instagram.com/hilarysouzafotografias/" class="textoLink">@HilarySouzaFotografias</a>
    <p class="copy">&copy; 2023 Fotografias Inc.</p>
</footer>

</html>