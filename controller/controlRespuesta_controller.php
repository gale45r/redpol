<?php
	
	
	include "../model/respuesta_model.php";
	$texto = $_POST['texto'];
    $id_pregunta_FK = $_SESSION['idPregunta'];
	$id_usuario_FK = $_SESSION['id_Usuario'];
		
	$ok=Respuesta::nuevaRespuesta($texto,$id_pregunta_FK,$id_usuario_FK);
	$title = "Respuesta Registrada";
	$view_page="recuadro_muestra_view.php";
    include '../views/bienvenido_view.php';

?>