<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomeBanco = "produtosestoque";
    $strcon = new mysqli($servidor, $usuario, $senha, $nomeBanco) or die('Erro ao conectar ao banco de dados'); 
    
    $codBarra = (isset($_GET["codBarra"])?$_GET["codBarra"]:false);

    $resultado = "SELECT * FROM estoque WHERE codigoBarras = '$codBarra'";  
   
   
    $strcon->close(); 
    echo json_encode($resultado);
?>