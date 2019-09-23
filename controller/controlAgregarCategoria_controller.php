<?php


	include "../model/categoria_model.php";
    $nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];
	$id_usuario = $_SESSION['id_Usuario'];

	$ok=Categoria::altaCategoria($nombre,$descripcion,$id_usuario);

	$title = "Categoria Agregada";
	$view_page="recuadro_muestra_view.php";
    include '../views/bienvenido_view.php';

?>