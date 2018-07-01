<?php
//Declaração de tipos escalares;
function soma(float ...$valores):string {
    
    return array_sum($valores);
    
}

var_dump(soma());
echo "<br/>";
echo soma(25, 33);
echo "<br/>";
echo soma(1.5, 3.3);

?>