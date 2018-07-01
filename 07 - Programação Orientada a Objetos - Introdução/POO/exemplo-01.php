<?php

//Conceitos de Programação Orienta a Objetos

class Pessoa{
    
    public $nome; //Atributo
    
    public function falar(){//Metodo
        
        return "O meu nome é: ".$this->nome;
        
    }
    
}

$moises = new Pessoa();//Parenteses não obrigatório quando não há construtor na classe;
$moises->nome = "Moisés";
echo $moises->falar();


?>