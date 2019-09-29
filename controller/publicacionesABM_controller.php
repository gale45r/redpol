<?php
	//include "../model/respuesta_model.php";
	
	 
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
			$title = "Nueva Respuesta";
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
			$producto=Like::likes($id_usuario,$id);
			$title = "Like a Pregunta!";
			$view_page="recuadro_muestra_view.php";
			include '../views/bienvenido_view.php';
			break;
		    
		case 'dislike':
			include "../model/util_model.php";
			$id_usuario = $_SESSION['id_Usuario'];
			$producto=Like::dislikes($id_usuario,$id);
			$title = "DisLike a Pregunta!";
			$view_page="recuadro_muestra_view.php";
			include '../views/bienvenido_view.php';
			break;
			
		
		case 'listarRespuestas':
		    include "../model/respuesta_model.php";
			$producto=Respuesta::getAllRespuestasByIdPregunta($id);
			//var_dump($producto);
			$title = "Lista de Respuestas";
			$view_page="listarRespuestas_view.php";
			include "../views/bienvenido_view.php";

		  break;
	  case 'likeR':
		  include "../model/util_model.php";

		  $id_usuario = $_SESSION['id_Usuario'];
		  $producto=Like::likesR($id_usuario,$id);
		  $title = "Like a Respuesta!";
		  $view_page="recuadro_muestra_view.php";
		  include '../views/bienvenido_view.php';
		  break;
		  
	  case 'dislikeR':
		  include "../model/util_model.php";
		  $id_usuario = $_SESSION['id_Usuario'];
		  $producto=Like::dislikesR($id_usuario,$id);
		  $title = "DisLike a Respuesta!";
		  $view_page="recuadro_muestra_view.php";
		  include '../views/bienvenido_view.php';
		  break;

		case 'eliminarPregunta':
		include "../model/publicacion_model.php";
		    $ok=Publicacion::eliminarPublicacion($id);
			$title = "Se elimino todas las respuestas y preguntas";
		    $view_page="recuadro_muestra_view.php";
		    include '../views/bienvenido_view.php';
			// $done="La operacion se ha hecho con exito.";
			// $productos=Producto::verTodosLosProductos();
			// $view_page="listarProductos_view.php";
			break;
			
		}
	  }	
	  	include "../views/ejercicio_view.php";
	  
?>