<?php
    $_con = mysqli_connect('127.0.0.1', 'root', 'global', 'hsfotografias');
    if ($_con === FALSE) {
        echo "Não foi possível conectar ao Servidor de banco de dados ";
    } else {
        echo "Foi possível conectar ao Servidor de banco de dados ";
        
        // Recupere os dados do formulário usando o método POST
        $nome = $_POST["nome_con"];
        $email = $_POST["email_con"];
        $telefone = $_POST["telefone_con"];
        $rua_numero = $_POST["rua_numero_con"];
        $cidade = $_POST["cidade_con"];
        $estado = $_POST["estado_con"];
        $motivo = $_POST["motivo_con"];

        // Crie e execute a consulta de inserção
        $query = "INSERT INTO contato VALUES (null, '$nome', '$email', '$telefone', '$rua_numero', '$cidade', '$estado', '$motivo');";
        $result = mysqli_query($_con, $query);

        if ($result) {
            echo "Os dados foram inseridos com sucesso.";
        } else {
            echo "Erro ao inserir os dados: " . mysqli_error($_con);
        }

        mysqli_close($_con);
    }
?>