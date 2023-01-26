<?php
    //Tipos de dados

    /**************************** Escalares *******************/
        //string:
        $nome = "Otaniel";
        var_dump($nome);

        if(is_string($nome)):
            echo "Este dado é do tipo string";

        else:
            echo "Não é uma string";
        endif;

        //int:
        $idade = 20;
        var_dump($idade);
        echo "<hr/>";

        //float:
        $altura = 1.87;
        var_dump($altura);
        echo "<hr/>";

        //boolean:
        $admin = true;
        var_dump($admin);
        echo "<hr/>";

        /**************************** Compostos *******************/

        //array:

        $carros = array("Elantra", "K9", "Bentley", "Ferrari", "Porcshe", 20, 1.78, true);
        var_dump($carros);
        echo "<hr/>";