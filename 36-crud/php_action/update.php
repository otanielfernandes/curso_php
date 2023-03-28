<?php
    //Iniciando uma sessão:
    session_start();

    //Conexão:
    require_once 'db_connect.php';

    if(isset ($_POST['btn_editar'])):
    $nome =  mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome =  mysqli_escape_string($connect, $_POST['sobrenome']);
    $email =  mysqli_escape_string($connect, $_POST['email']);
    $idade =  mysqli_escape_string($connect, $_POST['idade']);
    $id = mysqli_escape_string($connect, $_POST['id']);
    
    //Atualizando os dados no banco de dados:
    $sql = "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', idade = '$idade' WHERE id = '$id'";
    endif;

    //Verificando se os dados foram ou não atualizados:
        
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso";
        header('Location: ../index.php');
    else:
        $_SESSION['mensegem'] = "Erro ao atualizar";
        header('Location: ../index.php');
    endif;

?>