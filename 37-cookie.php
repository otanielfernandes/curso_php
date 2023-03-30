<?php   
    //Criando cookies:


    //Um cookie deve ter: nome, valor, e prazo de validade;
    setcookie('user', 'Otaniel Fernandes', time()+3600);

    setcookie('email', 'otanielfernandes123@gmail.com', time()+3600);

    setcookie('ultima_pesquisa', 'Carro da Mustang', time()-2400);

    //Apagando um cookie:

    
    var_dump($_COOKIE);

    

?>