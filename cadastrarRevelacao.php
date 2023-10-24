<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/cadastrarContato.css">
    <title>Contatar HS</title>
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
    $_con = mysqli_connect('127.0.0.1', 'root', '', 'hsfotografias');
    if ($_con === FALSE) {
        echo "<h3>Não foi possível conectar ao Servidor de banco de dados.</h3>";
    } else {

        // Recupere os dados do formulário usando o método POST
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $quantidade =$_POST["quantidade"];
        $formato = $_POST["formato"];
        $medida = $_POST["medida"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $cep = $_POST["cep"];

        // Crie e execute a consulta de inserção
        $query = "INSERT INTO contato VALUES (null, '$nome', '$email', '$telefone',
         '$quantidade', '$formato', '$medida','$cidade','$estado','$cep');";
        $result = mysqli_query($_con, $query);

        if ($result) {
            echo "<h3>Os dados foram inseridos com sucesso.</h3>";
        } else {
            echo "<h3>Erro ao inserir os dados: " . mysqli_error($_con) . '</h3>';
        }

        mysqli_close($_con);
    }
    ?>
    <main>
        <img src="imagens/Foto1.jpg" alt="" class="images">
        <img src="imagens/Foto2.jpg" alt="" class="images">
        <img src="imagens/Foto3.jpg" alt="" class="images">
    </main>
</body>

<footer>
    <a class="linkI" href="https://www.instagram.com/hilarysouzafotografias/"><img src="imagens/logoInsta.png" alt="" class="logoInsta"></a>
    <a class="linkI" href="https://www.instagram.com/hilarysouzafotografias/" class="textoLink">@HilarySouzaFotografias</a>
    <p class="copy">&copy; 2023 Fotografias Inc.</p>
</footer>

</html>