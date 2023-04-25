<?php

#carrega classe
include 'Funcionario.php';

//instancia novo funcionario
$pedro = new Funcionario();

//atribui novo salario
$pedro->setSalario(876);

//obtem salario
echo 'Salario: R$ ' .$pedro->getSalario();


?>