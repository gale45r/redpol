<?php
include 'db.php';

class Usuario{

	public static function  registrarUsuario($alias,$nombre,$email,$password,$nivel){
		$ejemplo= (New Conexion())->conectar();
		$consulta = "INSERT INTO  usuario( alias,nombre,email,password,nivel) 
		VALUES ('$alias','$nombre','$email','$password','$nivel')";
		$resultado = $ejemplo->query($consulta);
		//$ejemplo->desconectar();
		return $resultado;
	}
	public static function  IdentificarUsuario($nombre){
		$conexion= (New Conexion())->conectar();
		$consulta = "SELECT * FROM usuario WHERE nombre LIKE '$nombre'";
		$ok = $conexion->query($consulta)->fetch_row();
		return $ok;
	}
}
?>
