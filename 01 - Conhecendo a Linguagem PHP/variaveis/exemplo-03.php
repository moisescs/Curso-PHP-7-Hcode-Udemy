<?php
/*No PHP existem 8 tipos de dados;
    - 4 Primitivos;
    - 2 Compostos;
    - 2 Especiais;
 */
 
//Tipos Básicos 'Strings,  Inteiros, Flutantes, Boleanos;'
    $nome = "Hcode";
    $site = 'www.hcode.com.br';
     
    $ano = 1990;
    
    $salario = 5500.99;
     
    $bloqueado = false;
     
//Tipos Tipos Compostos "Array, Objetos";
    
    $frutas = array("abacaxi", "laranja", "manga");
    echo $frutas[2];
    
    $nascimento = new DateTime();
    var_dump($nascimento);
    
//Tipos Especiais 'resources, null'
    $arquivo = fopen("exemplo-03.php", "r");
    var_dump($arquivo);

    $nullo = null;
    $vazio = "";
?>