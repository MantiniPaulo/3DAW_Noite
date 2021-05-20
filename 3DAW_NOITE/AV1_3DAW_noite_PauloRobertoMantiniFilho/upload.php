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
    if ($_SERVER["REQUEST_METHOD"]  == "POST")
    {
        $operacao = (isset($_POST["enviar"])?$_POST["enviar"]:false);

        if ($operacao == "arquivo")
        {
           echo '<form class="container" enctype="multipart/form-data" action="usuario.php" method="POST">';
                echo '<hr>';
                echo '<input type="hidden" name="MAX_FILE_SIZE" value="30000" />';
                echo '<input type="file" class="btn btn-primary" name="userfile" /> <br><br>';
                echo '<input type="submit" class="btn btn-primary" name="upload" value="Executar"/>';
                echo '<hr>';
            echo '</form>';          
            
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