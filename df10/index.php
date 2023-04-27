<?php

if ($_POST) {
    $turno = $_POST['turno'];

    if ($turno == "M" || $turno == "m") {
        $saudacao = "Bom dia, boa aula!";
    } elseif ($turno == "V" || $turno == "v") {
        $saudacao = "Boa tarde, boa aula!";
    } elseif ($turno == "N" || $turno == "n") {
        $saudacao = "Boa noite, boa aula!";
    } else {
        $saudacao = "Formato inválido.";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
</head>

<body>
    <h1>Em que turno você estuda?</h1>

    <form method="POST">
        <label for="turno">Digite a inicial de seu turno:</label> <br>
        <input type="text" name="turno" maxlength="1" placeholder="M, V ou N..." id="turno"> <br><br>

        <input type="submit" value="Enviar"> <br><br>

        <?php
        if ($_POST) {
            echo $saudacao;
        }
        ?>
    </form>
</body>

</html>