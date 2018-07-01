<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Moises Silva");
$cad->setEmail("moises.silva_ads@outlook.com.br");
$cad->setSenha("123456");

$cad->registrarVenda();




?>