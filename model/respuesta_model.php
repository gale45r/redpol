<?php
include 'db.php';

class Respuesta{

    public static function  nuevaRespuesta($texto,$id_pregunta_FK,$id_usuario_FK){
		$ejemplo= (New Conexion())->conectar();
		$consulta = "INSERT INTO  respuesta(texto,id_pregunta_FK,id_usuario_FK) 
		VALUES ('$texto','$id_pregunta_FK', '$id_usuario_FK')";
		$resultado = $ejemplo->query($consulta);
		//$ejemplo->desconectar();
		//return $res;
	}


	public static function  verTodasLasPublicaciones(){
		$ejemplo= (New Conexion())->conectar();
		$resultado = $ejemplo->query("SELECT * FROM publicacion");
		$res= $resultado->fetch_all();
		//$ejemplo->desconectar();
		return $res;
	}


	public static function agregarProducto($nombre,$descrip,$precio){
		$ejemplo= (New Conexion())->conectar();
		$ok=Producto::igualProducto($nombre,$descrip,$precio);
		if($ok){
			return FALSE;
		}else{

			Producto::nuevoProducto($nombre,$descrip,$precio);
			return TRUE;
		}
	}

	public static function igualProducto($nombre, $descrip, $precio) {
		$conexion= (New Conexion())->conectar();
		$consulta = "SELECT * FROM 	producto WHERE nombre='$nombre' and descripcion='$descrip' and precio='$precio'";
		$ok = $conexion->query($consulta)->fetch_row();
		if(is_null($ok)){
			return 0;
		}else{
			return 1;
		}
		//$ejemplo->desconectar();
	}


	public static function  nuevoProducto($nombre,$descrip,$precio){
		$ejemplo= (New Conexion())->conectar();
		$consulta = "INSERT INTO  producto( id, nombre, descripcion, precio) VALUES ('','$nombre', '$descrip','$precio')";
		$resultado = $ejemplo->query($consulta);
		//$ejemplo->desconectar();
		//return $res;
	}


	public static function obtenerProducto($id){
		$conexion= (New Conexion())->conectar();
		$consulta = "SELECT * FROM 	producto WHERE id= '$id'";
		$ok = $conexion->query($consulta)->fetch_row();
		return $ok;
		//$ejemplo->desconectar();
	}

	public static function eliminarProducto($id){
		$conexion= (New Conexion())->conectar();
		$consulta = "DELETE FROM 	producto WHERE id= '$id'";
		$ok = $conexion->query($consulta);
		//$ejemplo->desconectar();	}
	}

	public static function modificarProducto($id, $nombre, $descripcion, $precio){
		$conexion= (New Conexion())->conectar();
		$consulta = "UPDATE producto SET nombre='$nombre', descripcion='$descripcion', precio='$precio' WHERE id= '$id'";
		$ok = $conexion->query($consulta);
				//$ejemplo->desconectar();
	}
}
?>
