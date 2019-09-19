<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $title; ?></title>  
        <link rel="stylesheet" href="../css2/estilos.css">    

    </head>
    <body>
		<header>
        <p style="text-align: center;"><?php
        echo "Usuario: " . $_SESSION["usuario"];
        if (!isset($_SESSION["usuario"]))
            {
                echo "Usuario: Invitado";
            }
            else{
                echo "Usuario: " . $_SESSION["usuario"];
            }?>
        </p>
              <div class="menu">							
                <li><a href="index.php">Inicio</a></li>
                <li><a href="../controller/listarProductos_controller.php">Listar Productos</a></li>
                <li><a href="#">Ver Carrito</a></li>
                <li> <a href="../controller/loginUsuario_controller.php">Iniciar Sesi&oacute;n</a></li>
                <li><a href="../controller/registroUsuario_controller.php">Registrarse</a></li>			
            </ul>
        </div>
        <h1 id="title"><?php echo $title; ?></h1>	
        <div id="texto">
        	<?php include "../views/".$view_page; ?>
        </div>
		   

    </body>
</html>