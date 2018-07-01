<?php

class Documento {
    
    private $numero;
    
    public function getNumero(){
        
        return $this->numero;
        
    }
    
    public function setNumero($numero){
        
        $this->numero = $numero;
        
    }
    
}

class CPF extends Documento {
    
    public function validar():bool{
        
        $numeroCPF = $this->getNumero();
        //Validaçao dp CPF
        return true;
        
    }
    
}

$doc = new CPF();

$doc->setNumero("122233564-56");
var_dump($doc->validar());

echo "<br/>";

echo $doc->getNumero();

?>