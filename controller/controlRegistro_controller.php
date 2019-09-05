<?php
	include "../model/usuario_model.php";
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$nivel = $_POST['nivel'];

	$ok=Usuario::registrarUsuario($email,$nombre,$nivel);

	$title = "Usuario Registrado";
	$view_page="ejercicio_view.php";
	include "../views/ejercicio_view.php";

?>