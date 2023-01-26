<?php
//Trabalhando com condicionais:

$idade = 20;

if($idade == 20):
    echo "A idade é mesmo 20";
endif;

echo "<hr/>";

$nacionalidade = "Angola";

if ($nacionalidade == "Portugal"):
    echo "A nacionalidade é igual a Angola";

else:
    echo "Nacionalidade != \"Angola\"";
endif;
echo "<hr/>";
            /*if, else if e else */

            $numero = 50;

            if ($numero == 45):
                echo "Este número é igual a 45";
            
            elseif ($numero <= 44):
                echo "Este número é igual ou menor que 40";

            else:
                echo "Numero != 45";

            endif;
            echo "<hr>";
            /*Operadores ternários */

            $media = 9;
            echo ($media >= 10) ? "Apto!" : "Ñ apto!";

?>