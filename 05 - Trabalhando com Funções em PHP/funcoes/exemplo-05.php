<?php

$a = 10;
//Passagem de valor por referencia usa se & antes do paramentro, o que altera os valores do objeto fora da função;
function trocaValor(&$a){
    
    $a += 50;
    
    return $a;
    
}

echo trocaValor($a);
echo "<br/>";
echo $a;
echo "<br/>";
echo trocaValor($a);
echo "<br/>";
echo trocaValor($a);

?>