<?php
//Autoload metodo que faz o includes diretamente das classes usadas

function __autoload($nomeClasse){
    
    //var_dump($nomeClasse);
    require_once("$nomeClasse.php");
}

$carro = new DelRey();
$carro->acelerar(100);

?>