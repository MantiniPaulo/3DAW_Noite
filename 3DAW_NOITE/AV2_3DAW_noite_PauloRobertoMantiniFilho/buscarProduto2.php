<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomeBanco = "produtosestoque";
    $strcon = new mysqli($servidor, $usuario, $senha, $nomeBanco) or die('Erro ao conectar ao banco de dados'); 
    
    $id = (isset($_GET["id"])?$_GET["id"]:false);

    $query = "SELECT * FROM `estoque` WHERE id = $id";  
    
    $resultado = $strcon->query($query);
      
    $result  =  $resultado->fetch_array();
    echo json_encode($result);
    
    $strcon->close(); 
    
?>