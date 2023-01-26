<?php
$nome = "Goreth";

function exibeNome(){
    global $nome;
    echo $nome;
}
    exibeNome();
    echo "<hr/>";
    /////////////////

    function exibeProvincia(){
        $provincia = "Luanda";
        global $provincia;
    }
    exibeProvincia();
    echo $provincia;

    //////////////////////

    $a = 7;
    $b = 10;
    $c = 17;

    function soma(){
        echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
    }
    soma();
?>