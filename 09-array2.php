<?php
//Criando um array:

$sons = ["Regular Show", "Nova BI", "Savage Mood"];

//Mostrando a quantidade de elementos:
print_r($sons);
echo "<br>";
echo count($sons);
echo "<hr>";
//Adicionando em uma variável:

$totalSons = count($sons);
echo "$totalSons";
echo "<hr>";
// trabalhando com foreach

$carros = array();
$carros[0] = "Audi";
$carros[1] = "Elantra";
$carros[2] = "Ferrari";
$carros[3] = "Mazeratti";
$carros[4] = "Porsche";
foreach($carros as $valor){
    echo $valor."<hr>";
}
?>