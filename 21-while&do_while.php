<?php
//Usando a estrutura de repetição While:
//while: significa "enquanto", executará algo enquanto a condição for verdadeira;

$contador = 1;

while($contador <= 10):
    echo "O valor do contador é $contador"."<br>";
    $contador++;
endwhile;
echo "<hr>";
//Trabalhando com o do while:
// do while: ele primeiro executa o bloco de instruções, só depois verifica se a condição é verdadeira ou não:

$contador2 = 1;

do{
    echo "O contador2 é igual à $contador2 <br>";
    $contador2++;
} while($contador2 < 31);

?>