<!doctype html>
<html lang="pt-pt">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <style>
        #formulario{
            width: 50vw;;
        }
    </style>

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
        <?php
            if(isset($_POST['btn-enviar'])):
                $erros = array();

                if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
                    echo $erros[] = "Idade precisa ser um inteiro positivo";
                endif;

                if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
                        echo $erros[] = "Email inválido";
                endif;

                if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
                        echo $erros[] = "Peso precisa ter casa decimal";
                endif;

                if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
                        echo $erros[] = "Endereçamento IP inválido";
                endif;

                if(!$url = filter_input(INPUT_POST, 'link', FILTER_VALIDATE_URL)):
                        echo $erros[] = "URL inválida";
                endif;

                if(!empty ($erros)):
                    foreach($erros as $erro):
                        echo "<li>$erro</li>";
                    endforeach;
                else:
                    echo "Congrats, seus dados estão todos corretos";
                endif;
              endif;
        ?>

        <div id="formulario" class="container mt-3">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="form form-control container">
                Idade: <br/>
                <input type="text" name="idade" class="form-control"><br/>
                Email: <br/>
                <input type="text" name="email" class="form-control text-center" placeholder="fulano@gmail.com"><br/>

                Peso(kg): <br/>
                <input type="text" name="peso" class="form-control text-center" placeholder="85.5"><br/>
                
                IP: <br/>
                <input type="text" name="ip" class="form-control text-center" placeholder="xxx.xxx.xxx.xxx"><br/>
                
                URL:<br/>
                <input type="text" name="link" class="form-control text-center" placeholder="https://www.facebook.com">
                <button type="submit" class="btn btn-primary mt-2" name = "btn-enviar">Enviar</button>
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