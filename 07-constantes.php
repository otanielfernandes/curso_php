<?php
    //Constantes:

    define("NOME", "Otaniel Fernandes");
    define("IDADE", 20);
    define("ALTURA", 1.87);
    define("SOLTEIRO", true);

    echo 'Eu chamo-me '.NOME.', tenho '.IDADE. ' anos de idade, com '.ALTURA.' de altura.';
    echo "<hr/>";

    //constantes com arrays:

    define ("TIMES", ['Barça', 'Man City', 'PSG', 'Benfica']);
    echo TIMES[1];
    echo "<hr/>";


    define("PESO", 84.5);

    function exibePeso(){
        echo PESO;
    }
    exibePeso();
?>