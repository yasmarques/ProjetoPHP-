<?php

class Comissionado extends Empregado{
    var $totalVenda;
    var $taxaComissao;

    function __construct($nome, $sobrenome, $cpf, $totalVenda, $taxaComissao){
        parent:: __construct($nome, $sobrenome, $cpf);
		$this->totalVenda = $totalVenda;
        $this->taxaComissao = $taxaComissao;
    }

    function vencimento($salbruto, $salli){
        $salbruto = $this->totalVenda - $this->taxaComissao;
        $salli = $salbruto->$desconto;
    }

    function __destruct(){
        echo "<br> ($this->nome) foi jogar no vasco... <br>";
    }
}

?>