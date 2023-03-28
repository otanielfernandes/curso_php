<?php
    //Conexão com a base de dados:
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "crud";


    //Fazendo a conexão:
    $connect = mysqli_connect($servername, $username, $password, $db_name);

    //Usar a função que permite o uso de caracteres especiais:
    mysqli_set_charset($connect, "utf8");

    //Verificando se há algum erro na conexão:
        if(mysqli_connect_error()):
            echo "Falha na conexão".mysqli_connect_error();
        endif;
?>