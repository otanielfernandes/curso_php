<!doctype html>
<html lang="pt-pt">

<head>
  <title>Upload</title>
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
    <?php 
        if(isset($_POST['btn-enviar'])):
        $formatosPermitidos = array("png", "jpg","jpeg");
        $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

          if(in_array($extensao, $formatosPermitidos)):
            $pasta = "arquivos/";
            $temporario = $_FILES['arquivo']['tmp_name'];
            $novoNome = uniqid()."$extensao";
  
            if(move_uploaded_file($temporario, $pasta.$novoNome)):
              echo $mensagem = "Upload feito com sucesso";
            else:
              echo $mensagem = "Erro ao ser feito o upload";
            endif;
          else:
            echo $mensagem = "Formato indisponível para Upload";
          endif;
          endif;
        
        
        // echo var_dump($_FILES);
    
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
        Arquivo: <input type="file" name="arquivo"><br/>
        <button class="btn btn-success" type="submit" name="btn-enviar">Enviar</button>
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