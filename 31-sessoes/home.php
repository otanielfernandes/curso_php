<?php
    //Iniciando uma sessão:
        session_start();

    //Exibindo os conteúdos da sessão que consta na página "sessoes":

    echo $_SESSION['carro']."<br>".$_SESSION['cor']."<br>".session_id();
?>