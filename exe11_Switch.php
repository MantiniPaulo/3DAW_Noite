<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Comando Switch</h1>
    <br>
    <?php
        $n1 = 7;
        $n2 = 8;
        $n3 = 10;
        $n4 = 10;

        Switch ($n1){
            case 5:
                echo "O valor de $n1 é 5";
                echo "<br>";
                break;
            case 6:
                echo "O valor de $n1 é 6";
                echo "<br>";
                break;
             case 7:
                echo "O valor de $n1 é 7";
                echo "<br>";
                break;
        }
       
        echo "<br>";
    ?>
</body>
</html>
