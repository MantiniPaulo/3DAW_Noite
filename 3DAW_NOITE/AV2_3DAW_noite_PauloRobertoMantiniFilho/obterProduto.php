<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomeBanco = "produtosestoque";
    $strcon = new mysqli($servidor, $usuario, $senha, $nomeBanco) or die('Erro ao conectar ao banco de dados'); 
    
    $codBarras = (isset($_GET["codBarra"])?$_GET["codBarra"]:false);

    $query = "SELECT * FROM `estoque` WHERE codigoBarras = $codBarras";  
    
    $resultado = $strcon->query($query);
      
    $result  =  $resultado->fetch_array();
    echo json_encode($result);
    
    $strcon->close(); 
    
?>