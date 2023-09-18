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
        <!-- Seu código de cabeçalho aqui -->
    </header>

    <?php
    // Verifique se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recupere os dados do formulário
        $rua = $_POST["rua"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $cep = $_POST["cep"];
        $pais = $_POST["pais"];
        $data = $_POST["data"];
        $hora = $_POST["hora"];
        $tiposEnsaio = $_POST["tiposEnsaio"];

        // Aqui você pode fazer o que quiser com os dados, por exemplo, inseri-los em um banco de dados
        // ou enviar por e-mail

        // Exemplo: exibindo os dados na página
        echo "<p>Dados do evento:</p>";
        echo "Rua: " . $rua . "<br>";
        echo "Cidade: " . $cidade . "<br>";
        echo "Estado: " . $estado . "<br>";
        echo "CEP: " . $cep . "<br>";
        echo "País: " . $pais . "<br>";
        echo "Data do ensaio: " . $data . "<br>";
        echo "Hora do ensaio: " . $hora . "<br>";
        echo "Tipo de ensaio: " . $tiposEnsaio . "<br>";
    }
    ?>

    <footer>
        <!-- Seu código de rodapé aqui -->
    </footer>
</body>
</html>
