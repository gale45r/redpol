<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $title; ?></title>  
        <link rel="stylesheet" href="../css2/estilos.css">    

    </head>
    <body>
		<header>
        <p style="text-align: center;">
        <?php include "../views/a.php"; ?>
        </p>
              <div class="menu">							
                <li><a href="index.php">Inicio</a></li>
                
                <?php
                if (!isset($_SESSION['prue']))
                {
                    echo '<li> <a href="../controller/loginUsuario_controller.php">Iniciar Sesi&oacute;n</a></li>';
                    echo '<li><a href="../controller/registroUsuario_controller.php">Registrarse</a></li>';
                }
                else
                {
                    echo '<li><a href="../controller/listarPublicaciones_controller.php">Preguntas</a></li>';
                    echo '<li><a href="../controller/agregarCategorias_controller.php">Agregar Categorias</a></li>';
                    echo '<li><a href="../controller/controlCerrarSession_controller.php">Salir</a></li>';
                }
                
                ?>
                
                ?>		
            </ul>
        </div>
        <h1 id="title"><?php echo $title; ?></h1>	
        <div id="texto">
        	<?php include "../views/".$view_page; ?>
        </div>
		   

    </body>
</html>