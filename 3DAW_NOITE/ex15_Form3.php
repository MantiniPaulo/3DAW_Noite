<?php
setlocale (LC_ALL, 'pt_BR');
if ($_SERVER["REQUEST_METHOD"]  == "POST") {
    $nomeValido = 0;
    $idadeValida = 0;
    $emailValido = 0;

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $email = $_POST["email"];

    if (ctype_alpha($nome)) {
        $nomeValido = 1;
    } else {
        echo "Nome inválido";
        echo "<br>";
    }
    if (ctype_digit($idade)) {
        $idadeValida = 1;
    } else {
        echo "Idade inválida";
        echo "<br>";
    }
    if ($email != "") {
        $emailValido=1;
    } else {
        echo "Email inválido";
        echo "<br>";
    }
    if ($nomeValido != 1 or $idadeValida != 1 or $emailValido != 1) {
        echo "<p>Formuláro com erro, preencha novamente</p>";
        echo "<br>";
    } else {
        echo "Olá $nome, formulário preenchido com SUCESSO";
        echo "<br>";
        echo "Sua idade é $idade";
        echo "<br>";
        echo "seu email é $email";
        echo "<br>";
    }
    echo "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario completo php</title>
</head>
<body>
<form action="ex15_Form3.php" method="POST">
    Nome: <input type="text" name="nome">
    <br><br>
    Idade: <input type="text" name="idade">
    <br><br>
    email: <input type="text" name="email">
    <br><br>
    <input type="submit" value="enviar">
</form>
<?php
/*
if ($_SERVER["REQUEST_METHOD"]  == "POST") {
    if ($nomeValido == 1 and $idadeValida == 1 and $emailValido == 1) {
        echo "Olá $nome";
        echo "<br>";
        echo "Sua idade é $idade";
        echo "<br>";
        echo "seu email é $email";
        echo "<br>";

    } else {
        echo "<p>Formuláro com erro, preencha novamente</p>";
        echo "<br>";
    }

}*/
?>
</body>
</html>