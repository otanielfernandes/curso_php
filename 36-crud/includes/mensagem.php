<?php
//Inciando a sessão:
session_start();
if(isset ($_SESSION['mensagem'])): ?>
    
    <script> //Mensagem de alerta com Java Script
    window.onload = function(){
        M.toast({html: '<?php echo $_SESSION['mensagem'];?>'});
    }
    </script>

<?php
endif;
session_unset();
?>
