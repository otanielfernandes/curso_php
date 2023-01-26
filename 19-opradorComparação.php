<?php
    //Operadores de comparação: servem para comparar valores;

    /*
    == : operador de igualdade (um valor deve ser igual ao outro valor);
    != : operador de diferença (Um valor deve ser diferente do outro);
    === : operador de igualdade (O valor e o tipo de dado devem ser iguais ao outro valor);
    !== : operador de diferença (O valor e o tipo de dados devem ser diferentes do outro valor);
    <> : mesmo que o opeardor de diferença(o valor deve ser do outro);
    < : menor que (quando um valor é menor que o outro);
    > : maior que (quando um valor é maior que o outro);
    <= : menor ou igual que (quando um valor é menor ou igual que o outro);
    >= : maior ou igual que (quando um valor é maior ou igual que o outro);
    <=> : spaceship (ele retorna apenas 3 valores, se o valor do lado esquerdo for menor que o lado direito: ele retornará "-1"; se o lado esquerdo for igual ao lado direito: ele retornará "0"; 
    se o lado esquerdo for maior que o lado direito: ele retornará "1").
    */

    if(10 == "10"):
        echo "Positivo";
    else:
        echo "Negativo";
    endif;
    echo "<hr>";

    var_dump(30 <=> 40);
?>