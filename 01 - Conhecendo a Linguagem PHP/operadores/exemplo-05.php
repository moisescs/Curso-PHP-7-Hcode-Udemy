<?php
$a = 50;
$b = 35;

//php 7 spaceship, faz comparacação de menor, igual e maior na mesma operação;
// Retornando 1 p/ maior, 0 p/ igual e -1 p/ menor;
var_dump($a <=> $b);

echo "<br/>";
$a = 35;
$b = 60;
var_dump($a <=> $b);

echo "<br/>";
$a = 35;
$b = 35;
var_dump($a <=> $b);

?>