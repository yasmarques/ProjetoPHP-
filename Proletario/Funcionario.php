<?php

class Funcionario{
    
private $codigo;
public $nome;
private $nascimento;
protected $salario;

    function setSalario($salario){
        if (is_numeric($salario)&&($salario > 0))
        {
            $this->salario = $salario;
        }
    }

    function getSalario(){
        return $this->salario;
    }
}

?>