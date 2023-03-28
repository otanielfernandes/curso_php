<?php 
    //Iniciado a sessão:
    session_start();

    //Conexão:
    require_once 'db_connect.php';

    //Verificando se existe o botão deletar:

    if(isset ($_POST['btn-deletar'])):
        $id = mysqli_escape_string($connect, $_POST['id'] );
    
    //Deletando os dados da tabela clientes, baseando-se no id:

        $sql = "DELETE FROM clientes WHERE id = '$id'";
    endif;

    //Verificando se os dados foram deletados:
        if(mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Cliente deletado com sucesso!";
            header('Location: ../index.php');

        else:
            $_SESSION['mensagem'] = "Erro ao deletar cliente!";
            header('Location:../index.php');
        endif;
?>

