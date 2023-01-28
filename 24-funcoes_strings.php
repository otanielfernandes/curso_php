<?php
    //Funções de strings com PHP:

    /*str_repeat --> serve para repetir o valor de uma string em uma quantidade de vezes determinada*/

    $nome = "Otaniel";
    $repetir = str_repeat($nome, 4);
    echo "$repetir ";
    echo "<hr/>";

    /*strlen --> retorna o tamanho (comprimento) de uma string */

    echo strlen($nome);
    echo "<hr>";

    /*str_replace --> serve para substituir uma palavra de um texto*/

    $texto = "O PSG levará a liga dos campeões 2022/23";
    $novoTexto = str_replace("PSG", "Man City", $texto);
    echo $texto."<br/>";
    echo $novoTexto;
    echo "<hr/>";


    /*strpos --> retorna a posição de uma determinada palavra em um texto*/

    echo strpos($texto, "liga");
    ?>