<?php

include "../model/publicacion_model.php";
$categorias=Publicacion::verTodasLasCategorias();
$usuarios=Publicacion::verTodosUsuarios();

if(isset( $_POST['opc'] ))
 {
   $option= $_POST['opc'];
   switch ($option)
   { 
   	case '1':
		$id_caregoria=$_POST['id_categoria'];
		$publicacion=Publicacion::verTodasLasPublicacionesFiltradas($id_caregoria);
		//var_dump($productos);
		$title = "Lista de Preguntas";
		$view_page="listarPublicaciones_view.php";
		include "../views/bienvenido_view.php";
	 break;
	 case '2':
		$id_caregoria=$_POST['id_categoria'];
		$id_usuario_FK=$_POST['id_usu'];
		$publicacion=Publicacion::verTodasLasPublicacionesFiltradasUsu($id_caregoria,$id_usuario_FK);
		//var_dump($productos);
		$title = "Lista de Preguntas";
		$view_page="listarPublicaciones_view.php";
		include "../views/bienvenido_view.php";
	 break;
	 case '3':
		$id_usuario_FK=$_POST['id_usu'];
		$publicacion=Publicacion::verTodasLasPublicacionesByUsu($id_usuario_FK);
		//var_dump($productos);
		$title = "Lista de Preguntas";
		$view_page="listarPublicaciones_view.php";
		include "../views/bienvenido_view.php";
	 break;
	 case '4':
		$id_usuario_FK=$_POST['id_usu'];
		$producto=Publicacion::verTodasLasRespuestasByUsu($id_usuario_FK);
		$title = "Lista de Respuestas";
		$view_page="listarRespuestas_view.php";
		include "../views/bienvenido_view.php";
	 break;
	}
}
else{
	 $publicacion=Publicacion::verTodasLasPublicaciones();
	 $title = "Lista de Preguntas";
	 $view_page="listarPublicaciones_view.php";
	 include "../views/bienvenido_view.php";
}	
	
	

?>