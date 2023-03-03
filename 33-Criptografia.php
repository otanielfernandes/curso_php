<?php 
// Criando uma senha:
$senha = "123456";

//Criptografando a senha:
$nova_senha = base64_encode($senha);

//Mostrando a senha criptografada:
echo "Base64:".$nova_senha."<br>";
//Mostrando a senha sem criptografia:
echo "Sua senha é:".base64_decode($nova_senha);

echo "<hr>";

//Criptografando com o MD5:
//Com o MD5 não é possível descriptografar;

$texto = "Eu amo programar";
echo "MD5:".md5($texto);

//Criptografando com o Sha1:
echo "<hr>"."Sha1:".sha1($texto);
//Com o Sha1 também não é possível descriptografar;
echo "<hr>";

//Tornando a criptografia md5/sha1 mais segura:
$senha2 = "17102003";
 /* $senha_segura = password_hash($senha, PASSWORD_DEFAULT);
 echo "$senha_segura"; */

//Criando uma verificação:
    //Para isso precisamos criar mais uma variável para armazenar a senha em hash:
        $senha_db = '
        $2y$10$2c2jx60.vs5S.CL4yyjFa.ko3J4Ig5l1bdx0DpV4c9W9paHQWpa6y';
        if(password_verify($senha2, $senha_db)):
            echo "<hr>"."Senha válida";
        else:
            echo "Senha incorreta";
        endif;
?>