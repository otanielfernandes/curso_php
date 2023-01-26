<?php 
    //Trabalhando com Switch case:

        $cor = "azul";

        switch($cor):
            case "preto":
            echo "Sua cor preferida é a preta!";
            break;

            case "branco":
                echo "Sua  cor preferida é a branca!";
            break;

            case "azul":
                echo "Sua cor preferida é a azul!";
            break;

            default:
                echo "Sua cor preferida não encontra-se disponível nas opções!";
            
        endswitch;
?>