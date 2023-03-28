<?php
//Conexão
require_once 'php_action/db_connect.php';

//Header
require_once 'includes/header.php';


//Select

if(isset($_GET['id_'])):
    $id = mysqli_escape_string($connect, $_GET['id_']);

    //Consulta atráves do id:
    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);

    
endif;

?>
    <form action = "php_action/update.php" method = "POST">
            <fieldset>
                <legend>Edite aqui seus clientes!</legend>
                
                <div class="input-field col s12">
                    <input type="hidden" name="id" value = "<?php echo $dados['id'];?>">
                </div>


                <div class="input-field col s12">
                    <input type="text" name="nome" id="nome" value = "<?php echo $dados['nome'];?>">
                    <label for="nome">Nome</label>
                </div>

            <div class="input-field col m6">
                <input type="text" name="sobrenome" id="sobrenome" value = "<?php echo $dados['sobrenome'];?>">
                <label for="sobrenome">Sobrenome</label>
            </div>
                        
            <div class="input-field col s12">
                <input type="email" name="email" id="email" value = "<?php echo $dados['email'];?>" >
                <label for="email">Email</label>
            </div>

            <div class="input-field col s12">
                <input type="number" name="idade" id="idade" value = "<?php echo $dados['idade'];?>">
                <label for="idade">Idade</label>
            </div>

            <button type="submit" class="btn yellow" name="btn_editar">Atualizar</button>
            <a href ="index.php" class="btn green">Lista de clientes</a>

            </fieldset>
        
           

    </form>
<?php
//Footer
require_once 'includes/footer.php';

?>