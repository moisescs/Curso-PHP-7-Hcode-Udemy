<?php
 
 //Arquivo config. faz o aouto load das class diretamente.   
require_once("config.php");

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

//Carrega um usuário
//$usuario = new Usuario();
//$usuario->loadById(3);
//Aciona o metodo magico toString que quem sabe como imprimir o objetom da classe
//echo $usuario;

//LISTAR VARIOS USUÁRIO
//$lista = Usuario::getList();
//echo json_encode($lista);

//CARREGAR UMA LISTA DE USUÁRIOS PELO LOGIN
//$seach = Usuario::seach("j");
//echo json_encode($seach);

//CARREGA UM USUÁRIO USANDO LOGIN E A SENHA]
$usuario = new Usuario();
$usuario->login("root","!@#$");
echo $usuario;



?>