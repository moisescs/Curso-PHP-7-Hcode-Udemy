<?php

$qualSuaIdade = 30;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($qualSuaIdade < $idadeCrianca){
    
    echo "Criança";
    
}else if($qualSuaIdade < $idadeMaior){
    
    echo "Adolecente";
    
} else if ($qualSuaIdade < $idadeMelhor){
    
    echo "Adulto";
    
} else {
    
    echo "Idoso";
    
}

echo "<br/>";


//Operador Ternário
echo ($qualSuaIdade < $idadeMaior) ? "Menor de Idade" : "Maior de Idade";

?>