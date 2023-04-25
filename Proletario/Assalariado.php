<?php

class Assalariado extends Empregado{
    var $salario;

    function vencimento($salbruto, $salli){
        $salbruto = $this->salario;
        $salli = $this->$desconto;
    }

    function __construct($nome, $sobrenome, $cp, $salario){
        parent:: __construct($nome, $sobrenome, $cpf);
		$this->salario = $salario;
    }

    function vencimento($salbruto, $salli){
        $salbruto = $this->salario;
        $salli = $salbruto->$desconto;
    }

    function __destruct(){
        echo "<br> ($this->nome) foi jogar no vasco... <br>";
    }
}

?>