<?php
//Aprendendo a criar funções:

function exibeNome(){
    echo "Olá, chamam-me de Otaniel Fernandes";
}

    exibeNome();
    echo "<hr/>";

    //Exemplo de uma função com parâmetro:

    function mostraCidade($cidade){
        echo "Olá, eu vivo no $cidade"; 
    }
    mostraCidade("Kilamba(KK-5000)");
    echo "<hr/>";

    //Exemplo de uma função para calcular uma media:

   function calcMedia($nome, $nota1, $nota2, $nota3, $nota4){
    $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;
    if($media >= 10):
        echo "O $nome foi aprovado com media igual à $media";
    else:
        echo "O $nome foi reprovado com media $media";
    endif;
    }

    calcMedia("Otaniel", 17, 18, 19, 14);
?>
