<!doctype html>
<html lang="pt-pt">

<head>
  <title>Filtros</title>
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
  <?php
    if(isset($_POST['btn-enviar'])):
        $erros = array();

    $nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    

    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    if(!filter_var($idade, FILTER_VALIDATE_INT)):
        echo $erros[] = "Sua idade precisa ser um inteiro";
    endif;

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
        echo $erros[] = "Email inválido";
    endif;
    

    $link = filter_input(INPUT_POST, 'link', FILTER_SANITIZE_URL);
    if(!filter_var($link, FILTER_VALIDATE_URL)):
        echo $erros[]="URL inválida";
    endif;
    

        if(!empty($erros)):
            foreach($erros as $erro):
                echo "<li>$erro</li>";
            endforeach;
        else:
            echo "Congrats, seus dados estão todos certos";
        endif;
    endif;
  
  ?>
  <main>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            Nome: <input type="text" name="nome"><br/>
            Idade: <input type="text" name="idade"><br/>
            Email: <input type="text" name="email"><br/>
            Url: <input type="text" name="link"><br/>
            <button type="submit" name="btn-enviar">Enviar</button>
    </form>
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