<?php

class Empregado{
    var $nome;
    var $sobrenome;
    var $cpf;

    function vencimento($salbruto, $salli){
        $salli = $salbruto - $desconto;
    }

    function __construct($nome, $sobrenome, $cpf){

        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
    }

    function __destruct(){
        echo "<br> ($this->nome) foi jogar no vasco... <br>";
    }

}

?>