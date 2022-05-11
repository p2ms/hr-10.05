<?php 
require_once "Funcionario.php";
echo "boa noite,";

$func = new Funcionario();
$func->nome = "Stark";
$func->mostraNome();
$func->registro = 100;
$func->mostraSalario();
$func->alteraSalario($_POST['salario']);
//$func->alteraSalario(900);

