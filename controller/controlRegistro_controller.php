<?php
	include "../model/usuario_model.php";
	$alias = $_POST['alias'];
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$nivel = $_POST['nivel'];

	$ok=Usuario::registrarUsuario($alias,$nombre,$email,$password,$nivel);

	$title = "Usuario Registrado";
	$view_page="recuadro_muestra_view.php";
    include '../views/bienvenido_view.php';

?>