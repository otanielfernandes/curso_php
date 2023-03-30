<?php

//Criando uma expressão regular para email:

$email = "otanielfernandes123@hotamail.com";

$padrao = "/^[a-z0-9.\-\_]+@[a-z.\_\-]+(.com|.com.br|.net|)$/";

if(preg_match($padrao, $email)):
    echo "valido"."<hr/>".$email."<hr/>";

else:
    echo "Inválido"."<hr/>";

endif;

//Formatando uma data:

$data = "17/10/2023";

$padrao2 = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}/";

if(preg_match($padrao2, $data)):
    echo "Válido"."<hr/>".$data."<hr/>";
else:
    echo "Inválido"."<hr/>";
endif;

//Validação de número de telefone:

$telefone = "(+244)937-908-390";
$padrao3 = "/^[+\(\)\0-9]{6}[0-9\-]{4}[0-9\-]{7}$/";

if(preg_match($padrao3, $telefone)):
    echo "Válido"."<hr/>".$telefone;

else:
    echo "Inválido"."<hr/>";
endif;
?>