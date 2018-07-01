<?php 
//Variaveis predefinidas, são arreys super globais, como $_GET, $_POST, $_SERVER

    $nome = (int) $_GET["a"];
    //var_dump($nome);
    
    //$ip = $_SERVER["REMOTE_ADDR"];
    //echo $ip;
    $nomeArquivo = $_SERVER["SCRIPT_NAME"];
    echo $nomeArquivo ;
    
?>