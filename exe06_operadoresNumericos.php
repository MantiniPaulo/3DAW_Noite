<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>3DAW</h1>
+ = soma
<br>
- = subtração
<br>
* = multiplicação
<br>
/ = divisão
<br>
% = modulus
<br>
** = Potenciação(exponenciação)
<br>
<?php
$nome1 = "Bárbara Nascimento";
$n1 = 7;
$n2 = 8;
$n3 = 10;
$n4 = 3;

$f1 = 8.5476;
$f2 = 5.6523;

echo "<h2>Operadores Aritmeticos</h2>";

echo "<br> n1 + n2 = " . ($n1 + $n2);
echo "<br> n1 - n2 = " . ($n1 - $n2);
echo "<br> n1 * n2 = " . ($n1 * $n2);
echo "<br> f1 * f2 = " . (round($f1 * $f2, 2));
echo "<br> n3 / n4 = " . ($n3 / $n4);
echo "<br> f1 / f2 = " . ($f1 / $f2);
echo "<br> f1 / f2 = " . (round($f1 / $f2, 2));
echo "<br> n3 % n4 = " . ($n3 % $n4);
echo "<br> n3 ** n4 = " . ($n3 ** $n4);
?>
</body>
</html>