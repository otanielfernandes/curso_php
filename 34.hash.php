<?php 
//Armazenando uma senha:
$senha = "12345";
$senha_db = '$2y$10$ZP1.T6quMzdEPOulcSI9U.ml7zQnGKb9VkMzZ8rA8Yz.khj2bh/rG';

if(password_verify($senha, $senha_db)):
    echo "Senha correta";
else:
    echo "Senha incorreta";

endif;
?>