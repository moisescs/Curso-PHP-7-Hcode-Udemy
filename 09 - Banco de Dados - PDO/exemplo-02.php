<?php
//Conexão com ms sql server, muda apenas a tring.
$conn = new PDO("sqlsrv:Databse=dbphp7;server=localhost\SQLExpress;ConnectionPooling=0", "sa", "");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($results as $row){
    
    foreach($row as $key => $value){
        
        echo "<strong>".$key.": </strong>".$value."<br/>";
        
    }
    
    echo "=========================================== <br/>";
}

//var_dump($results);
?>