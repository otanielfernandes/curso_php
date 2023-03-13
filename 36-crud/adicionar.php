<?php
//Header
require_once 'includes/header.php';

?>
    <form action = "php_action/create.php" method = "POST">
            <fieldset>
                <legend>Cadastre aqui novos clientes!</legend>

                <div class="input-field col s12">
                    <input type="text" name="nome" id="nome">
                    <label for="nome">Nome</label>
                </div>

            <div class="input-field col m6">
                <input type="text" name="sobrenome" id="sobrenome">
                <label for="sobrenome">Sobrenome</label>
            </div>
                        
            <div class="input-field col s12">
                <input type="text" name="email" id="email">
                <label for="email">Email</label>
            </div>

            <div class="input-field col s12">
                <input type="number" name="idade" id="idade">
                <label for="idade">Idade</label>
            </div>

            <button type="submit" class="btn yellow" name="btn_cadastrar">Cadastrar</button>
            <a href ="index.php" class="btn green">Lista de clientes</a>

            </fieldset>
        
           

    </form>
<?php
//Footer
require_once 'includes/footer.php';

?>