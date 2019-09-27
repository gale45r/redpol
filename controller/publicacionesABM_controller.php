<?php
	//include "../model/respuesta_model.php";
	$title = "Opciones de una Pregunta";
	 
	  if(isset( $_GET['opcion'] ))
	  {
		$id=$_GET['id'];
		$_SESSION['idPregunta']=$id;
	    $option= $_GET['opcion'];
	    //var_dump($id);
	    //var_dump($option);
	    switch ($option)
		{ 
		case 'agregarRespuesta':
			include "../model/respuesta_model.php";
			//$producto=Producto::obtenerProducto($id);
			//var_dump($producto);
			$view_page="recuadro_muestra_view.php";
    		include '../views/bienvenido_view.php';
			$view_page="../views/altaRespuesta_view.php";
		  break;
		case 'follower':
			include "../model/util_model.php";
			
			$id_usuario_Seguido = $_GET['seguido'];
			$id_usuario_Seguidor = $_SESSION['id_Usuario'];
			
			$producto=Follower::addFollower($id_usuario_Seguido,$id_usuario_Seguidor);
			$title = "Usuario Seguido";
			$view_page="recuadro_muestra_view.php";
			include '../views/bienvenido_view.php';
		    break;
		    
		case 'like':
			include "../model/util_model.php";
			$id_usuario = $_SESSION['id_Usuario'];
			$producto=Like::like($id_usuario,$id);
			$title = "Like!";
			$view_page="recuadro_muestra_view.php";
			include '../views/bienvenido_view.php';
			break;
		    
		case 'dislike':
			include "../model/util_model.php";
			$id_usuario = $_SESSION['id_Usuario'];
			$producto=Like::dislike($id_usuario,$id);
			$title = "DisLike!";
			$view_page="recuadro_muestra_view.php";
			include '../views/bienvenido_view.php';
			break;

		case 'listarRespuestas':
		    include "../model/respuesta_model.php";
			$producto=Producto::obtenerProducto($id);
			//var_dump($producto);
			$view_page="obtenerProducto_view.php";
		  break;

		case 'eliminarPregunta':
		    $ok=Producto::eliminarProducto($id);
			$done="La operacion se ha hecho con exito.";
			$productos=Producto::verTodosLosProductos();
			$view_page="listarProductos_view.php";
			break;
			
		}
	  }	
	  	include "../views/ejercicio_view.php";
	  
?>