<!doctype html>
<html lang="en">

<head>
  <title>Formulário</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>

        body{
            background-image: linear-gradient(to right, #C33764, #1D2671);
        }
        #form{
            margin-top: 15px;
            width: 45vw;
            
        }
    </style>
</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <form action ="dados.php" method = "POST" id="form" class="container">    
        <div class="input-group" >
            <span class="input-group-text text-center">Primeiro e Último nome</span>
            <input type="text" name="nome" aria-label="First name" class="form-control text-center" placeholder="Otaniel">
            <input type="text" name="sobrenome" aria-label="Last name" class="form-control text-center" placeholder="Fernandes">
        </div>
        <br/>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="email" name="email" class="form-control text-center" placeholder="fulano@gmail.com" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="col-12">
            <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
        </div>
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