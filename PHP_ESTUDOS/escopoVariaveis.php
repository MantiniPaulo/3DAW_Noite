<?php

$nome = "paulo";

    function teste(){
        global $nome;
        echo $nome; 
    }
    

function teste2(){
    $nome = "joao";
    echo $nome."agora no teste dois";
    }

teste();
teste2(2);

?>