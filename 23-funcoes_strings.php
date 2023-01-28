<?php
    //Funções de strings em PHP:

    /*strtoupper --> converte uma string em maiúscula*/

    $nome = "otaniel fernandes";
    echo $nome."<br/>";
    echo strtoupper($nome);
    echo "<hr/>"; 

    /*strtolower --> converte strings em minúsculas*/
    $nome2 = "EURICO";
    $altera = strtolower($nome2);
    echo $nome2."<br>";
    echo $altera;
    echo "<hr>";


    /*substr($nome_variável, valor_de_contagem, total_caracteres) --> serve para mostrar uma parte do valor de uma string */

    $premier = "Man City";
    echo substr($premier, 4, 5);
    echo "<hr>";

    /*str_pad($nome_variável, tamnho que a variável receberá) */

    $cidade = "Luanda";
    echo str_pad($cidade, 10, "+", STR_PAD_BOTH); 
    ?>