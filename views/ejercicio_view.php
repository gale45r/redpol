<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head> 
		<h1 id="title"><?php echo $title; ?></h1>
    </head>
    <body>
        <div id="menu">
            <h2>Men&uacute;</h2>
            <ul>
                <li><a href="index.php">Inicio</a></li>
            </ul>
        </div>
        
        <div id="cuerpo">
		<?php include "../views/".$view_page; ?>
        </div>
    </body>
</html>