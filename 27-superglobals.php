<?php
    //Variáveis superglobais:

    /*$GLOBALS: usada para acessar variáveis globais em qualquer script do PHP. Ela armazena todas as variáveis em um "array" chamado: $GLOBALS*/

    $x = 10;
    $y = 17;

    function soma (){
        echo $GLOBALS['x'] + $GLOBALS['y'];
        
    }
    soma();
    echo "<hr/>";

    //Trabalhando com outra variável global: $_SERVER:
    
    echo $_SERVER['SERVER_NAME']."<br>";
    echo $_SERVER['SERVER_ADDR']."<br>";
    echo $_SERVER['SERVER_SOFTWARE']."<br>";
    echo $_SERVER['SERVER_PROTOCOL']."<br>";
    echo $_SERVER['REQUEST_METHOD']."<br>";
    echo $_SERVER['PHP_SELF']."<br>";
    echo $_SERVER['SCRIPT_FILENAME']."<br>";
    echo $_SERVER['REMOTE_ADDR']."<br>";
    echo $_SERVER['SERVER_PORT'];
    
    
    


?>