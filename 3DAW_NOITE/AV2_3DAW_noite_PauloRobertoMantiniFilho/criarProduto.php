<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomeBanco = "produtosestoque";
    $strcon = new mysqli($servidor, $usuario, $senha, $nomeBanco) or die('Erro ao conectar ao banco de dados');    

    
    $codBarra = (isset($_GET["codBarra"])?$_GET["codBarra"]:false);
    $nomeProduto = (isset($_GET["nomeProduto"])?$_GET["nomeProduto"]:false);
    $fabricante = (isset($_GET["fabricante"])?$_GET["fabricante"]:false);
    $precoVenda = (isset($_GET["precoVenda"])?$_GET["precoVenda"]:false);
    $quantAdquirida = (isset($_GET["quantAdquirida"])?$_GET["quantAdquirida"]:false);
    $peso = (isset($_GET["peso"])?$_GET["peso"]:false);
    $descricao = (isset($_GET["descricao"])?$_GET["descricao"]:false);
    $imagem = (isset($_GET["imagem"])?$_GET["imagem"]:false);
    $dia = (isset($_GET["dia"])?$_GET["dia"]:false);
    $ativo = (isset($_GET["ativo"])?$_GET["ativo"]:false);  

      
    $resultado = $strcon->query("INSERT INTO `estoque`(`codigoBarras`, `nomeProduto`, `fabricante`, `precoVenda`, `quantidade`, `peso`, `descricao`, `link`, `data`, `ativo`) VALUES" . "($codBarra,'$nomeProduto','$fabricante',$precoVenda,$quantAdquirida, $peso, '$descricao','$imagem','$dia',$ativo)");           
        
    
    $strcon->close(); 
    echo json_encode($resultado);
?>