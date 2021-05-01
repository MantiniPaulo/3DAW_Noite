<?php
 $pessoas = array();

 array_push($pessoas, array(
     'nome'=> 'João',
     'idade' => 20
 ));
 array_push($pessoas, array(
     'nome'=> 'Andreia',
     'idade' => 22
 ));

 echo json_encode($pessoas);
?>