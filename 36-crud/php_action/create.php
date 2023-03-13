<?php
    //Conexão:
    require_once 'db_connect.php';

    if(isset ($_POST['btn_cadastrar'])):
    $nome =  mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome =  mysqli_escape_string($connect, $_POST['sobrenome']);
    $email =  mysqli_escape_string($connect, $_POST['email']);
    $idade =  mysqli_escape_string($connect, $_POST['idade']);
    
    //Inserindo os dados no banco de dados:
    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) values  ('$nome', '$sobrenome', '$email', '$idade')";

    endif;
    if(mysqli_query($connect, $sql)):
        header('Location: ../index.php?cadastrado');
    else:
        header('Location: ../index.php?erro');
    endif;

?>