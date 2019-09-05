<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
		<title><?php echo $title; ?></title>      

    </head>
    <body>
		<header>
			<div id="Menu">
				<h1 id="title"><?php echo $title; ?></h1>
				<a href="../controller/controlerLogin.php">Iniciar Sesi&oacute;n</a>
				<a href="../controller/registroUsuario_controller.php">Registrarse</a>
			</div>
		</header>

        <div id="menu">
            <h2>Men&uacute;</h2>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="../controller/listarProductos_controller.php">Listar Productos</a></li>
                <li><a href="#">Ver Carrito</a></li>
            </ul>
        </div>
        <div id="texto">
        	<?php include "../views/".$view_page; ?>
        </div>
		   

    </body>
</html>