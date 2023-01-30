<?php
//Criando variáveis para coletar os dados:

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];

    echo "Nome e Sobrenome digitado: $nome $sobrenome"."<hr/>";
    echo "Email digitado: $email"."<hr/>";

    var_dump($_POST);

?>