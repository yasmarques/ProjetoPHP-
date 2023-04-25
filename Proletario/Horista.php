<?php

class Horista extends Empregado{
    var $precoHora;
    var $horasTrabalhadas;

    function __construct($nome, $sobrenome, $cpf, $precoHora, $horasTrabalhadas){
        parent:: __construct($nome, $sobrenome, $cpf);
		$this->precoHora = $precoHora;
        $this->horasTrabalhadas = $horasTrabalhadas;
    }

    function vencimento($salbruto, $salli){
        $salbruto = $this->horasTrabalhadas * $this->precoHora;
        $salli = $salbruto->$desconto;
    }

    function __destruct(){
        echo "<br> ($this->nome) foi jogar no vasco... <br>";
    }
}


?>