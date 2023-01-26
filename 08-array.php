<?php
//Criando um array:

$carros = array(1 => "Porsche", "Ferrari", "Mercedes", "Bentley", "BMW");
$carros[] = "Elantra";
print_r($carros);
echo "<hr/>";
echo $carros[1];
echo "<hr>";
//Outra forma de criar arrays:
$times = array();
$times[] = "Barcelona";
$times[] = "Manchester City";
$times[] = "PSG";
$times[] = "Benfica";
print_r($times);
echo "<br>".$times[1];
echo "<hr>";

//Também podemos construir arrays da seguinte forma:
    $grupo48 = ["Otaniel-Lider", "Leonardo", "Rufino", "Alcina", "Marcelina"];
    print_r($grupo48);
    echo "<hr>".$grupo48[0];

?>