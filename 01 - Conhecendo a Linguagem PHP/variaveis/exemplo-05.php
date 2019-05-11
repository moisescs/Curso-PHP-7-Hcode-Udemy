<?php

//Escopo de Variável
$nome = "Moisés";

//Escopo 1
function teste(){
    //pegar valores de fora do escopo;
    global $nome;
    echo $nome;
}   

//Escopo 2
function teste2(){
    $nome = "joão";
    echo $nome." Agora teste2";
} 

teste();
echo "<br/>";
teste2();
?>