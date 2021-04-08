<?php
    $nomeValido = 0;
    $idadeValida = 0;
    $emailValido = 0;
    
    $nome = $_GET["Nome"];
    $idade = $_GET["Idade"];
    $email = $_GET["Email"];

    echo "nome = $nome";
    echo "<br>";
    echo "idade = $idade";
    echo "<br>";
    echo "email = $email";
    
    echo "<br>";
    echo "<br>";

    if (ctype_alpha($nome)) {
        $nomeValido = 1;
    } else {
        echo "Nome Invalido";
        echo "<br>";
    }
    if (ctype_digit($idade)) {
        $nomeIdade = 1;
    } else {
        echo "Idade Invalida";
        echo "<br>";
    }
    if (ctype_alpha($email)) {
        $nomeEmail = 1;
    } else {
        echo "E-mail Invalido";
        echo "<br>";
    }

?>
