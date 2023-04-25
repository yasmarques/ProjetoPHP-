<?php

include_once 'produto.php';

$valor = new Produto();

$valor -> Codigo = 4011;

$valor ->Descricao = "CD The Best do Quero Voltar pra Casa";

echo $valor->Codigo . "-" . $valor ->Descricao;

?>