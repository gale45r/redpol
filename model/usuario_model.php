<?php
include 'db.php';

class Usuario{

	public static function  registrarUsuario($email,$nombre,$nivel){
		$ejemplo= (New Conexion())->conectar();
		$consulta = "INSERT INTO  usuario( email,nombre,nivel) VALUES ('$email', '$nombre','$nivel')";
		$resultado = $ejemplo->query($consulta);
		//$ejemplo->desconectar();
		return $resultado;
	}

}
?>
