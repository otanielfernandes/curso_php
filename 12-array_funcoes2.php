<?php
    //Criando um array
    $nomes = array("Eu" => "Otaniel", "Blood" => "Emmanuel", "Tropa" => "Aceltino");

    //Continuidade de funções de arrays:
        /*array_values: retorna um novo array com os parâmetros do array passado*/
    $values = array_values($nomes);
    print_r($values);
    echo "<hr>";

    /*array_merge: agrega o conteúdo de 2 arrays*/

    $carros = array("Porsche", "Mazeratti", "Mustang");
    $motos = array("KTM", "Ducati", "Yamaha");

    $veiculos = array_merge($carros, $motos);

    print_r($veiculos);
    echo "<hr>";

    /* array_pop: exclui a última posição do array */
    print_r($motos);
    echo "<hr>";
    echo array_pop($motos);
    echo "<br>";
    print_r($motos);
    echo "<hr>";
    /*array_shift: exclui a primeira posição do array*/
        echo array_shift($carros);
        echo "<br>";
        print_r($carros);


?>