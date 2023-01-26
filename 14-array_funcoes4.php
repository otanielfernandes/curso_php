<?php
//Criando uma string:
$data = "17/10/2023";

/*explode: transforma uma string em array*/
$novaData = explode('/', $data);
print_r($novaData);
echo "<br> <br>";

$frase = "Eu sou o Otaniel";

$array = explode(" ", $frase);
print_r($array);
echo "<hr/>";

/*implode: transforma um array em string */

$meses = array("Outubro", "Novembro", "Dezembro");

$resultado = implode('-', $meses);
print_r($resultado);
?>
