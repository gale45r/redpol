
        <?php
        session_start();
        echo session_id();

        if (!isset($_SESSION["u"]))
            {
                echo "Usuario: Invitado";
            }
            else{
                echo "Usuario: " . $_SESSION["u"];
            }
            //session_destroy();
            //$_SESSION["usuario"]="a";
            
            ?>




