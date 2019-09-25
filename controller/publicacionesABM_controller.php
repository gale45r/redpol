<?php
	include "../model/respuesta_model.php";
	$title = "Opciones de una Pregunta";
	 
	  if(isset( $_GET['opcion'] ))
	  {
	    $id=$_GET['id'];
	    $option= $_GET['opcion'];
	    //var_dump($id);
	    //var_dump($option);
	    switch ($option)
		{ 
        case 'agregarRespuesta':
			//$producto=Producto::obtenerProducto($id);
			//var_dump($producto);
			$view_page="obtenerProducto_view.php";
		  break;
		case 'editar':
			$producto=Producto::obtenerProducto($id);
			//var_dump($producto);
			$view_page="obtenerProducto_view.php";
		  break;
		  
		case 'eliminar':
		    $ok=Producto::eliminarProducto($id);
			$done="La operacion se ha hecho con exito.";
			$productos=Producto::verTodosLosProductos();
			$view_page="listarProductos_view.php";
			break;

		case 'guardar':
			$nombre=$_POST['nombre'];
			$descripcion=$_POST['descripcion'];
			$precio=$_POST['precio'];
			var_dump($nombre);
			Producto::modificarProducto($id, $nombre, $descripcion, $precio);
			
			$productos=Producto::verTodosLosProductos();
			$view_page="listarProductos_view.php";
			break;
		  
		}
	  }	
	  	include "../views/ejercicio_view.php";
	  
?>