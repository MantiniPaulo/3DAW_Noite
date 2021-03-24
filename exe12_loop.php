<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Comando loop</h1>
<br>
<?php
    $n1 = 0;
    $n2 = 8;
    $n3 = 10;
    $n4 = 100;
    $alunos = array("jose", "Maria", "Vilma", "Angelica");

    while ($n1 < $n4){
    echo "While - O valor de n1 = " . $n1;
    echo "<br>";
    $n1 += 5;
    }       

    echo "<br>";

    do {
        echo "Do - O valor de n1 = " . $n2;
        echo "<br>";
        $n2 += 7;
    } while ($n2 < 50);

    echo "<br>";

    for ($x1=0; $x1<4; $x1++){
        echo "For - O valor de x1 = $x1";
        echo "<br>";
        echo "For - São alunos de 3DAW: $alunos[$x1]";
        echo "<br>";
    }

    foreach($alunos as $aluno){
        echo "For - São alunos de 3DAW: $aluno";
        echo "<br>";
    }




?>
</body>
</html>