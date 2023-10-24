<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/Hilary.css">
    <link rel="stylesheet" href="Css/home.css">
    <link rel="shortcut icon" href="imagens/imagesDiego/imagem1.png" type="image/x-icon">
    <title>Evento</title>
</head>

<body>
    <header>
        <img src="../imagens/logo.png" alt="" class="logo">
        <p>A fotografia tem o poder de eternizar a efemeridade</p>
        <nav class="topnav">
            <a class="botaoM" href="../home.html">Home</a>
            <a class="botaoM" href="../sobreNos.html">Sobre nós</a>
            <a class="botaoM" href="../galeriaDeFotos.html">Galeria de fotos</a>
            <a class="botaoM" href="../cadastrarContato.html">Entre em contato</a>
            <a class="botaoM" href="../cadastrarEvento.html">Eventos</a>
            <a class="botaoM" href="../cadastrarRevelacao.html">Revelações</a>
            <a class="botaoM" href="../fazerLogin.html">Login</a>
        </nav>
    </header>

    <?php
    // Conectar ao banco de dados
    $_con = mysqli_connect('127.0.0.1', 'root', '', 'hsfotografias');
    if ($_con === FALSE) {
        echo "<h3>Não foi possível conectar ao Servidor de banco de dados.</h3>";
    } else {
        // Recupere os dados do formulário
        $rua = $_POST["rua"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $cep = $_POST["cep"];
        $pais = $_POST["pais"];
        $hora = $_POST["hora"];
        $data = $_POST["dataEve"];
        $tiposEnsaio = $_POST["tiposEnsaio"];

        // Criar uma consulta preparada
        $query = "INSERT INTO evento VALUES (null, rua, cidade, estado, cep, pais, null, null, tiposEnsaio, null)";

        // Preparar a consulta
        $stmt = mysqli_prepare($_con, $query);

        // Verificar se a preparação foi bem-sucedida
        if ($stmt) {
            // Vincular parâmetros
            mysqli_stmt_bind_param($stmt, "ssssssss", $rua, $cidade, $estado, $cep, $pais, $data, $hora, $tiposEnsaio);

            // Executar a consulta
            if (mysqli_stmt_execute($stmt)) {
                echo "<h3>Os dados foram inseridos com sucesso.</h3>";
            } else {
                echo "<h3>Erro ao inserir os dados: " . mysqli_error($_con) . '</h3>';
            }

            // Fechar a declaração
            mysqli_stmt_close($stmt);
        } else {
            echo "<h3>Erro na preparação da consulta: " . mysqli_error($_con) . '</h3>';
        }

        // Fechar a conexão
        mysqli_close($_con);
    }



    ?>

    <footer>
        <a class="linkI" href="https://www.instagram.com/hilarysouzafotografias/"><img src="../imagens/logoInsta.png" alt="" class="logoInsta"></a>
        <a class="linkI" href="https://www.instagram.com/hilarysouzafotografias/" class="textoLink">@HilarySouzaFotografias</a>
        <p class="copy">&copy; 2023 Fotografias Inc.</p>
    </footer>
</body>

</html>