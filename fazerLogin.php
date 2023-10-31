<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fazerLogin.css">
    <title>Realizar Login</title>
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
    // Configurar o fuso horário
    date_default_timezone_set('America/Porto_Velho');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Conectar ao banco de dados (substitua com suas credenciais)
        $conexao = new mysqli('127.0.0.1', 'root', '', 'hsfotografias');

        // Verificar a conexão
        if ($conexao->connect_error) {
            die("<h3>Erro de conexão: " . $conexao->connect_error . "</h3>");
        }

        // Recuperar dados do formulário
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        // Verificar se o usuário existe no banco de dados (substitua com sua estrutura de tabela)
        $sql = "SELECT * FROM usuario WHERE (email_usu='$email' AND senha_usu='$senha')";
        $result = $conexao->query($sql);

        if ($result->num_rows > 0) {
            // Usuário encontrado, registrar a data e hora do login
            $dataLogin = date('Y-m-d H:i:s'); // Obtém a data e hora atuais
            $id_usu = $result->fetch_assoc()["id_usu"];
            $sqlRegistro = "INSERT INTO login VALUES (null, '$dataLogin', '$id_usu')";

            if ($conexao->query($sqlRegistro) === TRUE) {
                echo "<h3>Login bem-sucedido!</h3>";
    ?>
                <main>
                    <img src="imagens/foto4.png" alt="" class="images">
                    <img src="imagens/foto5.png" alt="" class="images">
                    <img src="imagens/foto6.png" alt="" class="images">
                </main>
    <?php
            } else {
                echo "<h3 style='margin: 10%'>Erro ao registrar data de login: " . $conexao->error . "</h3>";
            }
        } else {
            echo "<h3 style='margin: 10%'> Usuário não encontrado ou senha incorreta.</h3>";
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