<?php
    //Ainda com funções:
    
    //Crinado um array:

    $frutas = array("Banana", "Maçã", "Maracujá");
/*array_unshift: adiciona 1 ou mais elementos no início do array */
    echo array_unshift($frutas, "Morango");
    echo "<br>";
    print_r($frutas);
    echo "<hr>";

/*array_push: adiciona 1 ou mais elementos no final de um array*/
    print_r($frutas);
    echo "<br><br>";
    array_push($frutas, "Manga", "Melância", "Uva");
    print_r($frutas);
    echo "<hr>";

    /*array_combine: serve para mesclar 2 arrays*/
    $keys = array("Campeão", "Vice", "Terceiro");
    $values = array("Man City", "Barcelona", "PSG");

    $result = array_combine($keys, $values);
    print_r($result);
    echo "<hr/>";

    /*array_sum: calcula a soma dos elementos de um array*/
    $soma = array(20, 15.8, 19, 55, 75, 90, 88);
    $total = array_sum($soma);
    var_dump($soma);
    echo "<br>";
    echo $total;
?>