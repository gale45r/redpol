<?php
	include "../model/usuario_model.php";
	$nombre = $_POST['nombre'];
	
        $usuario=Usuario::IdentificarUsuario($nombre);
        if($usuario != null)//echo $producto[0];
        {
            $title = "Usuario Identificado";
            $_SESSION['prue'] = $_POST['nombre'];
            $_SESSION['id_Usuario'] = $usuario[0];
           // echo $_SESSION['id_Usuario'];

        }else{
            $title = "Usuario No existe";
            
        }
   
	$view_page="recuadro_muestra_view.php";
    include '../views/bienvenido_view.php';

?>