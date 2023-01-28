<?php

//Usando a estrututra de repetição "for":

    for($contador = 0; $contador <= 15; $contador++):
        echo "O contador é igual à: $contador"."<br/>";
    endfor;
    echo "<hr/>";

    //Fazendo uma tabuada com o "for":

        for($tabuada = 1; $tabuada <= 12; $tabuada++):
            echo"7 X $tabuada = ".(7*$tabuada)."<br/>";
        endfor;
        echo"<hr>";

        //Usando o "foreach":

        $times = array("Barcelona", "Man City", "PSG", "Benfica");

        foreach($times as $indice => $valor):
            echo $indice."-".$valor."<br/>";

        endforeach;
?>