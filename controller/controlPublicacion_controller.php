<?php
	
	
	include "../model/publicacion_model.php";
	$texto = $_POST['texto'];
	$descripcion = $_POST['descripcion'];
	$id_usuario_FK = $_SESSION['id_Usuario'];
	$id_categoria_FK = $_POST['id_categoria'];
	//echo $_SESSION['id_Usuario'];
	
	$ok=Publicacion::nuevaPublicacion($texto,$id_usuario_FK,$id_categoria_FK,$descripcion);

	$title = "Pregunta Registrada";
	$view_page="recuadro_muestra_view.php";
    include '../views/bienvenido_view.php';

?>