<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>3DAW</h1>
<?php
$nome1 = "Bárbara Nascimento";
$nome2 = "Juliana Marques da Silva";
$nome3 = "LUCAS MELO";
$nome4 = "RENATO MALDONADO";
$nome5 = "PAULO MANTINI";
$nome6 = "GABRIELLE FRANCISCO";
$n1 = 7;
$n2 = 8;
$f1 = 8.5476;

echo "<h2>Exercicio 04</h2>";
echo "Alo alo boa noite gente";
echo "<table border='1'><tr><td>" . $nome1 . "</td><td>" . $nome2 . "</td><td>" . $nome3 . "</td></tr>";
echo "<tr><td>$nome4</td><td>$nome5</td><td>$nome6</td></tr></table>";
echo "<br>";
echo "<br>";

echo "<br> valor de variavel com tipo string: ";
var_dump($nome1);
echo $nome1 = $n1 + $n2;
echo "<br> valor de variavel com tipo string: ";
var_dump($nome1);
echo "<br>";
echo $nome1;
echo "<br>";
echo $f1;
echo "<br> valor de variavel com tipo string: ";
var_dump($nome2);
echo "<br> valor de variavel com tipo float: ";
var_dump($f1);
echo "<br> valor de variavel com tipo int: ";
var_dump($n1);
echo "<br> variavel N1 = $n1 é do tipo ponto flutuante? ";
var_dump(is_float($n1));
echo "<br> variavel F1 = $f1 é do tipo ponto flutuante? ";
var_dump(is_float($f1));
echo "<br> variavel F1 = $f1 é do tipo inteiro? ";
var_dump(is_int($f1));


?>
</body>
</html>