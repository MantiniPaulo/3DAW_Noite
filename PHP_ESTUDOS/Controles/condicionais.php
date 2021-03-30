<?php

$qualASuaIdade = 33;
$idadeCrianca = 12;
$idadeMaior = 18;
$idademelhor = 65;


if ($qualASuaIdade < $idadeCrianca) {
    echo "Criança"; 
} else if($qualASuaIdade < $idadeMaior) {
    echo "Adolescente";
} else if ($qualASuaIdade < $idademelhor) {
    echo "Adulto";
} else {
    echo "Idoso";
}

echo "<br>";

echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";
?>