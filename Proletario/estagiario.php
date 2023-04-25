<?php

    class Estagiario extends Funcionario{

        function getSalario(){
            return $this ->salario * 1.12;
        }
    }
?>