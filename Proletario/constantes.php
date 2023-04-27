<?php


     class Biblioteca{
        const Nome = "GTK ";
     }

     class Aplicação extends Biblioteca{
        //DECLARAÇÃO DAS CONSTANTES

        const Ambiente = "Gnonme Desktop ";
        const Versao = "3.8";

        //METODO CONSTRUTOR ACESSA AS CONSTANTES INTERNAMENTE 

        function __contruct($Nome){
            echo parent::Nome . self::Ambiente .self::Versao . $Nome. "<br>";  
        }
     }

     echo Biblioteca::Nome . Aplicacao::Ambiente . Aplicacao::Versao . "<br>";

     new Aplicacao(' dia');
     new Aplicacao(' Gimp');
     
?>