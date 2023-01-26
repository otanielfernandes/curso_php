<?php
//Operadores lógicos
/*
- && - and (e): as duas condições devem  ser verdadeiras para que seja retornado "true";
- || - or (ou): uma das condições deve ser verdadeira para ser retornado "true";
*/
$idade = 20;
$nome = "Otaniel";

if(($idade == 20) and ($nome == "Otaniel")):
    echo "É verdadeiro";
else:
    echo "É falso";
endif;

echo "<hr>";

if(($idade == 20) xor ($nome == "Aceltino")):
    echo "É verdade";
else:
    echo "É mentira";
endif;
?>