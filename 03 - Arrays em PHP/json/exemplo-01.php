<?php 

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'João',
    'idade' => 30
    ));
    
array_push($pessoas, array(
    'nome' => 'Maria',
    'idade' => 40
    ));
    
print_r($pessoas[0]['nome']);

echo json_encode($pessoas);

?>