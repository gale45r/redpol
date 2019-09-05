<?php
	include "../model/producto_model.php";
	$productos=Producto::verTodosLosProductos();
	//var_dump($productos);
	$title = "Lista de productos";
	$view_page="listarProductos_view.php";
	include "../views/ejercicio_view.php";
?>