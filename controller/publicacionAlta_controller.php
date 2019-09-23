<?php
	include "../model/categoria_model.php";

    $categorias=Categoria::verTodasLasCategorias();

	$title = "Agregar Pregunta";
	$view_page="altaPublicacion_view.php";
	include "../views/bienvenido_view.php";
	  
?>