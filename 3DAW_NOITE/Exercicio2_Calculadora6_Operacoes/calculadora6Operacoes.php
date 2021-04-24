<?php
if ($_SERVER["REQUEST_METHOD"]  == "POST")
{
$a = $_POST["a"];
$b = $_POST["b"];
$operação = $_POST["operacao"]; 
$resultado = 0;


    function validarDados(int $a, int $b, string $operação){
        $falha = "";
        if (!ctype_digit($a)) {
            $falha = "Parametro não é númerico";
        }
        if (!ctype_digit($b)) {
            $falha = "Parametro não é númerico";
        }
        if ($operação == "divisão" and $b ==0){
            $falha = "Não pode ocorrer a divisão por 0. Modifiquei o segundo número";
        }
    }

    function soma (int $a,int $b) {
        return $a + $b;
    }
    function subtração (int $a,int $b){
        return $a - $b;
    }
    function multiplicação (int $a,int $b){
        return $a * $b;
    }
    function divisao (int $a,int $b){
        return $a / $b; 
    }
    function exponenciacao (int $a,int $b){     
        return pow($a,$b);   
    }
    function raiz ($a){
        return sqrt($a);
    }
    function porcentagem(int $a,int $b){
        return ($a/100)*$b; 
    }
    function inversoMult(int $a){
        return 1/$a; 
    }


    validarDados($a,$b,$operação);
    if ($operação == "soma") { 
        $resultado = soma($a, $b);
    }elseif ($operação == "subtração") {
        $resultado = subtração($a, $b);
    }elseif ($operação == "multiplicação") {
        $resultado = multiplicação($a, $b);
    }elseif ($operação == "divisão"){
        $resultado = divisao($a,$b);
    }elseif ($operação == "exponenciacao" ){
        $resultado = exponenciacao($a, $b);
    }elseif ($operação == "raiz") {
        $resultado = raiz($a);
    }elseif ($operação == "porcentagem"){
        $resultado = porcentagem($a,$b); 
    }elseif ($operação == "inverso"){
        $resultado = inversoMult($a);
    }
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora 8 Operações (exercicio 2) Paulo R. Mantini Filho</title>
</head>
<body>
    <h1>Calculadora (Exercicio 2 - 3DAW)</h1>
    <form action="calculadora6Operacoes.php" method="POST">           
        <input type="number" name="a" />
        <br> 
        <input type="number" name="b"/>
        <br><br>
        <select name="operacao">
            <option value="">Selecione a operação que deseja fazer</option>
            <option value="soma">Somar</option>
            <option value="subtração">Diminuir</option>
            <option value="divisão">Dividir</option>
            <option value="multiplicação">Multiplicar</option>
            <option value="exponenciacao">Exponenciação (segundo algoritimo é o expoente)</option>
            <option value="raiz">Raiz Quadrada</option>
            <option value="porcentagem">Porcentagem</option>
            <option value="inverso">Inverso Multiplicativo</option>
        <input type = "submit" value="Calcular" />
        
   </form>
<?php

if ($_SERVER["REQUEST_METHOD"]  == "POST")
{
    if ($resultado != 0){
        echo "<br>";
        echo "Resultado: " . $resultado;
    }else{
        echo $erroMsg1;
    }
    
}

?>    
</body>
</html>



