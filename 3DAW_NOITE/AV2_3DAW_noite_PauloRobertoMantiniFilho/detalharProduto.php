<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomeBanco = "produtosestoque";
    $strcon = new mysqli($servidor, $usuario, $senha, $nomeBanco) or die('Erro ao conectar ao banco de dados'); 
      
    $query = "SELECT * FROM `estoque`";  
    
    $resultado = $strcon->query($query);
      
    $result  =  $resultado->fetch_all();
    echo json_encode($result);
    
    $strcon->close(); 
    
?>