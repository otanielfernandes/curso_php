<?php
    //Iniciando uma sessão:
    session_start();

    //Conexão:
    require_once 'db_connect.php';
    
    //Criando uma função para impedir a invasão, ou seja, para aumentar a segurança do sistema SQL Injection ou XSS
    function clear($input){
        global $connect;
        
        //sql injection
        $var = mysqli_escape_string($connect, $input);

        //xss
        $var = htmlspecialchars($var);
        return $var;
    }

    if(isset ($_POST['btn_cadastrar'])):
    $nome =  clear($_POST['nome']);
    $sobrenome =  clear($_POST['sobrenome']);
    $email =  clear($_POST['email']);
    $idade =  clear($_POST['idade']);
    
    //Inserindo os dados no banco de dados:
    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) values  ('$nome', '$sobrenome', '$email', '$idade')";

    endif;
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso";
        header('Location: ../index.php');
    else:
        $_SESSION['mensegem'] = "Erro ao cadastrar";
        header('Location: ../index.php');
    endif;

?>