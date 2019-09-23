<?php
include 'db.php';

class Categoria{

	public static function  altaCategoria($nombre,$descripcion,$id_usuario){
		$ejemplo= (New Conexion())->conectar();
		$consulta = "INSERT INTO  categoria(nombre,descripcion,id_Usuario) VALUES ('$nombre','$descripcion','$id_usuario')";
		$resultado = $ejemplo->query($consulta);
		//$ejemplo->desconectar();
		return $resultado;
	}
	public static function  verTodasLasCategorias(){
		$ejemplo= (New Conexion())->conectar();
		$resultado = $ejemplo->query("SELECT * FROM categoria");
		$res= $resultado->fetch_all();
		//$ejemplo->desconectar();
		return $res;
	}
}
?>
