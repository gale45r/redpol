<?php
	
	
	include "../model/respuesta_model.php";
	$texto = $_POST['texto'];
    $id_pregunta_FK = $_POST['id'];
	$id_usuario_FK = $_SESSION['id_Usuario'];

	$ok=Respuesta::nuevaRespuesta($texto,$id_pregunta_FK,$id_usuario_FK);
	$title = ($ok==true)?"Respuesta Registrada":"Respuesta No Registrada";
	$view_page="recuadro_muestra_view.php";
    include '../views/bienvenido_view.php';

?>