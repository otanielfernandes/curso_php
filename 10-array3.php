<?php
    //Criando um array associativo:

    $pessoa = array("nome" => "Otaniel", "sobrenome" => "Fernandes", "idade" => 20, "altura" => 1.87, "peso" => 85.7);

    $pessoa["Morada"] = "KK5000"; 
    print_r($pessoa);
    echo "<hr/>";
    echo $pessoa["nome"];
    echo "<hr>";

    //Aplicando no foreach:
        foreach($pessoa as $indice => $valor){
            echo $indice.": ".$valor."<br/>";
        }
        echo "<hr/>";
    //Arrays Multidimensionais:
    
    $times = array("La Liga" => array("Campeão" => "Barcelona", "Vice" => "Real Madrid", "Terceiro" => "Atlético Madrid"),
                    "Premier" => array("Biggers" => "Man City", "Middle" =>  "Liverpool", "Small" => "Chelsea"),
                    "Serie A" => array("Primeiro" => "Ac Milan", "Segundo" => "Inter", "Terceiro" => "Napoli"),
                    "Ligue One" => array("First" => "PSG", "Second" => "Lyon FC", "Third" => "Monâco"));

        echo $times["Premier"]["Biggers"]."<br>".$times["La Liga"]["Campeão"];
        echo "<hr>";
        //Percorendo cada array com foreach:
            foreach($times["La Liga"] as $indice => $valor){
                echo $indice.": ".$valor."<br>";
            };

            echo "<hr>";
            foreach($times["Premier"] as $indice => $valor){
                echo $indice.": ".$valor."<br>";

            }

            echo "<hr>";

            foreach($times["Serie A"] as $indice => $valor){
                echo $indice.": ".$valor."<br>";
            }

            echo "<hr>";

            foreach($times["Ligue One"] as $indice => $valor){
                echo $indice.": ".$valor."<br/>";
            }
?>