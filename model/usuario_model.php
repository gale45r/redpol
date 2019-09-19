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
	public static function  IdentificarUsuario($nombre){
		$conexion= (New Conexion())->conectar();
		$consulta = "SELECT count(nombre) FROM usuario WHERE nombre LIKE '$nombre'";
		$ok = $conexion->query($consulta)->fetch_row();
		return $ok;
	}
}
?>
