<?php
	include "../model/usuario_model.php";
	$nombre = $_POST['nombre'];
	
	
    
        $ok=Usuario::IdentificarUsuario($nombre);
        if($ok[0] == 1)//echo $producto[0];
        {
            $title = "Usuario Identificado";
            $_SESSION["u"] = $nombre;
            echo "la puta quete pario".$nombre;

        }else{
            $title = "Usuario No existe";
            
        }
   
	$view_page="recuadro_muestra_view.php";
    include '../views/bienvenido_view.php';

?>