<?php

	include "../model/publicacion_model.php";
	$publicacion=Publicacion::verTodasLasPublicaciones();
	//var_dump($productos);
	$title = "Lista de Preguntas";
	$view_page="listarPublicaciones_view.php";
	include "../views/bienvenido_view.php";
?>