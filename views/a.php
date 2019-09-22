
        <?php
        //session_start();
        //echo session_id();

        if (isset($_SESSION['prue']))
            {
                echo "Usuario: " . $_SESSION['prue'];
            }
            else{
                echo "Usuario: Invitado";
            }
            //session_destroy();
            //$_SESSION["usuario"]="a";
            
            ?>




