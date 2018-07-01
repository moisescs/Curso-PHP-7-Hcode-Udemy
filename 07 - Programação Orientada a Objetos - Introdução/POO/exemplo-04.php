<?php
//Métodos Mágicos
class Endereco{
    
    private $logradouro;
    private $numero;
    private $cidade;
    //Método costrutor __costruct
    public function __construct($a, $b, $c){
        
        $this->logradouro   = $a;
        $this->numero       = $b;
        $this->cidade       = $c;
        
    }
    
    public function __destruct(){
        
        //var_dump("Destruir");
        
    }
    
    //Possibilita dá um echo direto no obj. ele é convertido em string;
    public function __toString(){

        return $this->logradouro . ", ". $this->numero ." - ". $this->cidade;
        
    }
    
}

$meuEndereco = new Endereco("Rua A", "123", "São Paulo");

//var_dump($meuEndereco);
//unset($meuEndereco);

echo "<br/>";

echo $meuEndereco;

?>