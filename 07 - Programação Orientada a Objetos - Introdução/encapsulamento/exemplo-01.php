<?php

class Pessoa {
    
    public $nome = "Ramus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";
    
    public function verDados(){
        
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
        
    }
    
}

$objeto = new Pessoa();

//echo $objeto->nome . "<br/>";
//echo $objeto->idade . "<br/>";
//echo $objeto->senha . "<br/>";

$objeto->verDados();

/*
Encapsulamento:
 - Plubic - Pode ser acesado diretamente de qualquer lugar; 
 - Protect - acessado apenas pela propria classe e por suas herdeiras;
 - Private - Acessado apenas pela propria classe e ninguem mais;
*/

?>