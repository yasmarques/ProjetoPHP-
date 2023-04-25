<?php 
	class ContaPoupanca extends Conta
    {
		var $aniversario;

		function __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo, $aniversario)
		{
		parent:: __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo);
		$this->aniversario = $aniversario;

		}

		function retirar ($quantia){
			if ($this->saldo >= $quantia) {
				parent::retirar($quantia);
			}

			else {
				echo "<br>Retirada não permitida ... <br>";
				return false;
			}
			return true; 
		}

	}


 ?>