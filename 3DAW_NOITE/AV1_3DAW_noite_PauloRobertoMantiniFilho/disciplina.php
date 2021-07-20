<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$strcon = new mysqli('localhost','root','','banco_av1') or die('Erro ao conectar ao banco de dados');
$id = (isset($_GET["id"]) && $_GET["id"] != null) ? $_GET["id"] : "";
if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "del" && $id != "") {
    $resp = $strcon->query("DELETE FROM `disciplinas` WHERE id_disciplina =". $id); 
    header(sprintf("location:index.html?resultado=%s", $resp));       
}

if ($_SERVER["REQUEST_METHOD"]  == "POST")
{     
        
    $operacao = (isset($_GET["operacao"])?$_POST["operacao"]:false);
    $disciplina = (isset($_POST["disciplina"])?$_POST["disciplina"]:false);
    $periodo = (isset($_POST["periodo"])?$_POST["periodo"]:false);
    $idPrerequesito = (isset($_POST["idPrerequesito"])?$_POST["idPrerequesito"]:false);
    $credito = (isset($_POST["credito"])?$_POST["credito"]:false);   
    
    
   
    if ($operacao == "incluir")   
    {       
        $resultado = $strcon->query("INSERT INTO `disciplinas`(`nome`, `periodo`, `idPrerequesito`, `creditos`) VALUES" . "('$disciplina', $periodo, $idPrerequesito, $credito)");            
        if ($resultado)
        {
                       
            header(sprintf("location:index.html?resultado=%s", $resultado));
            
        }
        else
        {
            header(sprintf("location:index.html?resultado=%s", $resultado));
        }  
    

        $strcon->close(); 

    }else if($operacao == "listarDisciplina")
    {        
        
            $valores = $strcon->query("SELECT `id_disciplina`, `nome`, `periodo`, `idPrerequesito`, `creditos` FROM `disciplinas`");
            $linhas = $valores->num_rows;
            echo '<div class="container">';
            echo '<table class="table">';
            echo '<thead>';
            echo '<tr>';       
            echo '<th scope="col">Disciplina</th>';
            echo '<th scope="col">Periodo</th>';
            echo '<th scope="col">Requesito</th>';
            echo '<th scope="col">Credito</th>';
            echo '<th scope="col">Opções</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            for ( $i =0;$i<$linhas; $i++)
            {
                echo '<tr>';
                $reg = $valores->fetch_row();
                echo "<th>$reg[1]</th> <th>$reg[2]</th> <th>$reg[3]</th> <th>$reg[4]</th><th><a class='btn btn-primary' href='?act=upd&id=".$reg[0]."'>Alterar</a> 
                <a class='btn btn-danger' href='?act=del&id=".$reg[0]."'>Excluir</a></th>";             
                echo '</tr>';       
                          
            }
            echo '</tbody>';
            echo '</table>';
            echo '</div>';
            $strcon->close();         
    } else if ($operacao == "buscarDisciplina")
    {
        $valores = $strcon->query("SELECT `id_disciplina`, `nome`, `periodo`, `idPrerequesito`, `creditos` FROM `disciplinas`");
        $reg = $valores->fetch_row();
        echo '<div class="container">';
        echo '<form class="container" action="pesquisaDisciplina.php?act=pes" method="POST">';
        echo "Qual disciplina deseja pesquisar?";
        echo '<br>';
        echo "<input type='text' class='row' name='consulta'/>";
        echo '<br>';
        echo '<input type="hidden" class="row" name="operacao" value="pesquisaDisciplina" />';
        echo "<input type='submit' class='btn btn-primary' value='Pesquisar'/>";
        echo '</form>';
        echo '</div>';
    }        
} 
?>
<div class="container">
    <a style="cursor: pointer;" title="Voltar" onclick="voltar()">Voltar página anterior</a>
</div>

<script>
function voltar() {
    window.history.back();
}
</script>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>
</html>

