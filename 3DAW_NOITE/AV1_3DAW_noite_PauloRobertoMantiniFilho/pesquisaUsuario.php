<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $strcon = new mysqli('localhost', 'root', '', 'banco_av1') or die('Erro ao conectar ao banco de dados');
    $id = (isset($_GET["id"]) && $_GET["id"] != null) ? $_GET["id"] : "";

    if ($_SERVER["REQUEST_METHOD"]  == "POST") {
        $operacao = (isset($_POST["operacao"]) ? $_POST["operacao"] : false);
        $resp = (isset($_POST["consulta1"]) ? $_POST["consulta1"] : false);
        if ($operacao == "pesquisaUsuario") {
            $valores = $strcon->query("SELECT * FROM `usuario` WHERE nome LIKE '%" . $resp . "%'");
            $linhas = $valores->num_rows;
            echo '<div class="container">';
            echo '<table class="table">';
            echo '<thead>';
            echo '<tr>';
            echo '<th scope="col">Nome</th>';
            echo '<th scope="col">Email</th>';
            echo '<th scope="col">Tipo</th>';
            echo '<th scope="col">Perfil</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            for ($i = 0; $i < $linhas; $i++) {
                echo '<tr>';
                $reg = $valores->fetch_row();
                echo "<th>$reg[1]</th> <th>$reg[2]</th><th>$reg[4]</th><th>$reg[5]</th>";
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
            echo '</div>';
            $strcon->close();
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>

</html>