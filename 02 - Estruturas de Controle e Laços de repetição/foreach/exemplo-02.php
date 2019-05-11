<form method="post">
    Nome:
    <input type="text" name="nome"/>
    Data de Nascimento:
    <input type="date" name="nascimento"/>
    <input type="submit" value="Ok"/>
    
</form>

<?php

if(isset($_POST)){
    foreach($_POST as $key => $value){
        
        echo "Nome do campo: ".$key."<br/>";
        echo "Valor do campo: ".$value."<br/>";
        echo "<hr>";
        
    }
}
?>