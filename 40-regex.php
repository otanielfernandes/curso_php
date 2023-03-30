<?php
    // ^ significa o início de uma expressão regular:
    // $ significa o final de uma expresão regular:

    $string = "ofc";

    $padrao = "/^ofc$/";
    
    //Verificando a expressão regular:
    if(preg_match($padrao, $string)):
        echo "Válido"."<hr/>";
        echo $string."<hr/>";
    
    else:
        echo "Inválido"."<hr/>";

    endif;


    //Outra expressão regular:
    //Validando mais de uma ocorrência: {1,4}
    $string2 = "244";
    $padrao2 = "/^[A-Za-z0-9]+$/i";

    if(preg_match($padrao2, $string2)):
        echo "Válido"."<hr/>"."$string2";

    else:
        echo "Inválido"."<hr/>";
    endif;
?>