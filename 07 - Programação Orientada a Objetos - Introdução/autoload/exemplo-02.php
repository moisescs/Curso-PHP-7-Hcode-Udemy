<?php

function incluirClasses($nomeClasse){
    
    if(file_exists($nomeClasse.".php") === true){
        require_once($nomeClasse.".php");
    }
    
}

//Funções SPL de autoload c/ string do nome da função
spl_autoload_register("incluirClasses");

//Funções SPL de autoload c/ função anônima
spl_autoload_register(function($nomeClasse){
    
    if(file_exists("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php") === true){
        require_once("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse.".php");
    }
    
});
    


$carro = new DelRey();
$carro->acelerar(100);

?>