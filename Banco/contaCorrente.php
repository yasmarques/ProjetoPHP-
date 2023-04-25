<?php 
class ContaCorrente extends Conta
{
		var $limite;

		function __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo, $limite)

	{
		parent:: __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo);
		$this->limite = $limite;
	}

	function Retirar($quantia)
	{

		$cpmf = 0.05;

		if (($this->saldo + $this->limite) >= $quantia)
		{
			parent::retirar($quantia);

			parent::retirar($quantia * $cpmf);
		}
		else 
		{
			echo "<br>Retirada não permitida ... <br>";
			return false;
		}

		return true;
	}
}
 ?>