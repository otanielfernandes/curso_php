<?php
    //Funções para nùmeros:
    /*number_format --> serve para formatar os números em formatos de preço */

    $valor = 1750.17;

    $valorTrue = number_format($valor, "2", ",", ".");
    echo $valor."<br/>";
    echo "O preço do produto são: $valorTrue AOA";
    echo "<hr>";
    
    /*round --> serve para arredondar os valores (quer por defeito, quer por excesso)*/
    $num = 2.5;
    echo "$num<br/>";
    echo round($num);
    echo "<hr/>";

    /*ciel --> independentemente do valor, ele arredonda sempre por excesso*/
    $num2 = 17.2;
    echo $num2."<br/>";
    echo ceil($num2);
    echo "<hr/>";

    /*floor --> independependentemente do valor, ele arredonda sempre por defeito*/
    $nota = 9.9;
    echo $nota."<br/>";
    echo floor($nota);
    echo "<hr/>";


    /*rand --> é mais usado para fazer sorteio, ele mostra um intervalo de números em forma aleatória*/
    echo rand(5,20);
?>