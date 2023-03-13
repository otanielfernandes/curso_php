<?php
    //Conexão com a base de dados:
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "crud";

    //Fazendo a conexão:
    $connect = mysqli_connect($servername, $username, $password, $db_name);

    //Verificando se há algum erro:
        if(mysqli_connect_error()):
            echo "Falha na conexão".mysqli_connect_error();
        endif;
?>