
<?php
//Conexão 
require_once'db_connect.php';

//Sessão
  session_start();

//Botão enviar
    if( isset($_POST['btn-entrar']) ):
      $erros = array();
      $login = mysqli_escape_string($connect, $_POST['login']);
      $senha = mysqli_escape_string($connect, $_POST['senha']);
        
      if(empty($login) OR empty($senha)):
        $erros[] = "<li>OS dois campos (login e senha) precisam ser preenchidos obrigatoriamente</li>";
      else:
        $sql = "SELECT username FROM usuarios WHERE username = '$login'";
        $resultado = mysqli_query($connect, $sql);
        

          if(mysqli_num_rows($resultado) > 0):
            $senha = md5($senha);
            $sql= "SELECT * FROM usuarios WHERE username ='$login' and senha = '$senha'";
            $resultado = mysqli_query($connect, $sql);
          
            if(mysqli_num_rows($resultado) == 1):
              $dados = mysqli_fetch_array($resultado);
              $_SESSION['logado'] = true;
              $_SESSION['id_usuario'] = $dados['id'];
              header('Location:home.php');
            else:
              $erros[] ="<li>Usuário e senha não conferem...</li>";
            endif;

          else:
            $erros[]= "<li>Usuario inexistente</li>";
          endif;
      endif;
    endif;
?>
<!doctype html>
<html lang="pt-pt">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <h1>Login</h1>
    <?php
      if(!empty($erros)):
        foreach($erros as $erro):
          echo $erro;
        endforeach;
      endif;
    ?>
    <div class="container">
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="container">
          Login:<br/>
          <input type="text" name="login"><br/>
          Senha:<br/>
          <input type="password" name="senha"><br/>
          <button type="submit" name="btn-entrar">Entrar</button>
      </form>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>