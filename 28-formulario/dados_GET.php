<?php
//Craindo variáveis:

$nome = $_GET['nome'];
$email = $_GET['email'];

echo "Nome: $nome"."<br/>";
echo "Email: $email"."<br/>";
echo "<hr/>";

echo $_GET['idade']."<br>".$_GET['cidade']."<br>";

var_dump($_GET);
?>