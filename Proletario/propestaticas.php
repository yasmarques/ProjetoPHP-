<?php

    class Aplicacao{
        static $Quantidade;

        function __construct($Nome){
            self::$Quantidade++;
            $i = self::$Quantidade++;
            echo "Nova Aplicação número . $i: $Nome <br>";
        }
    }

    #criar objeto

    new Aplicacao('Dia');
    new Aplicacao('Gimp');
    new Aplicacao('Gnumeric');
    new Aplicacao('Abiword');
    new Aplicacao('Evolution');
    
    echo '<br>Quantidade de Aplicações = '.Aplicacao::$Quantidade . "<br>";


?>