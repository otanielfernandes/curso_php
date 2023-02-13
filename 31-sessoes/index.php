<?php
//Iniciando uma sessão:

    session_start();

//Criando uma sessão:

$_SESSION['cor'] = "Azul";
$_SESSION['carro'] = "Mustang";

echo $_SESSION['carro']."<br/>".$_SESSION['cor']."<br>".session_id();
?>