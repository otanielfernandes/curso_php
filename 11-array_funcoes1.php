<?php
//Funções de array:

$nomes = array("Eu" => "Otaniel", "Blood" => "Emmanuel", "Tropa" => "Aceltino", "Outro Tropa" => "Eurico", "Mano" => "Augusto");

            /* is_array: verifica se uma variável é um array */
echo is_array($nomes);
echo "<hr>";
var_dump(is_array($nomes));
echo "<br>";

if(is_array($nomes)):
    echo "É um array";
else:
    echo "Não é um array";
endif;

    /* in_array: verifica se um determinado valor existe em uma das posições do array */
    echo "<hr>";
    echo in_array("Otaniel", $nomes);
    echo "<br>";
    if(in_array("Aceltino", $nomes)):
        echo $nomes["Tropa"]." existe no array";
    else:
        echo "Este nome não existe no array";
    endif;

    /*array_keys: retorna um novo array com os indices do array passado como parâmetro */

    echo "<hr>";
    $key = array_keys($nomes);
    print_r($key);
?>