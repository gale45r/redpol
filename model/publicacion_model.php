<?php
include 'db.php';

class Publicacion{

    public static function  nuevaPublicacion($texto,$id_usuario_FK,$id_categoria_FK,$descripcion){
		$ejemplo= (New Conexion())->conectar();
		$consulta = "INSERT INTO  publicacion( texto,id_usuario_FK,id_categoria_FK,descripcion) VALUES ('$texto','$id_usuario_FK', '$id_categoria_FK','$descripcion')";
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
	public static function  verTodasLasPublicacionesFiltradas($id_caregoria){
		$ejemplo= (New Conexion())->conectar();
		$resultado = $ejemplo->query("SELECT * FROM publicacion where id_categoria_FK = '$id_caregoria'");
		$res= $resultado->fetch_all();
		//$ejemplo->desconectar();
		return $res;
	}
	public static function  verTodasLasPublicacionesFiltradasUsu($id_caregoria,$id_usuario_FK){
		$ejemplo= (New Conexion())->conectar();
		$resultado = $ejemplo->query("SELECT * FROM publicacion where id_categoria_FK = '$id_caregoria' and id_usuario_FK='$id_usuario_FK'");
		$res= $resultado->fetch_all();
		//$ejemplo->desconectar();
		return $res;
	}
	public static function  verTodasLasPublicacionesByUsu($id_usuario_FK){
		$ejemplo= (New Conexion())->conectar();
		$resultado = $ejemplo->query("SELECT * FROM publicacion where id_usuario_FK='$id_usuario_FK'");
		$res= $resultado->fetch_all();
		//$ejemplo->desconectar();
		return $res;
	}
	public static function  verTodasLasRespuestasByUsu($id_usuario_FK){
		$ejemplo= (New Conexion())->conectar();
		$resultado = $ejemplo->query("SELECT * FROM respuesta where id_usuario_FK='$id_usuario_FK'");
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

	public static function  verTodasLasCategorias(){
		$ejemplo= (New Conexion())->conectar();
		$resultado = $ejemplo->query("SELECT * FROM categoria");
		$res= $resultado->fetch_all();
		//$ejemplo->desconectar();
		return $res;
	}
	public static function  verTodosUsuarios(){
		$ejemplo= (New Conexion())->conectar();
		$resultado = $ejemplo->query("SELECT id_usuario,alias FROM usuario");
		$res= $resultado->fetch_all();
		//$ejemplo->desconectar();
		return $res;
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

	public static function eliminarPublicacion($id){
		//elimino respuestas
		$conexion= (New Conexion())->conectar();
		$consulta = "DELETE FROM respuesta WHERE id_pregunta_FK= '$id'";
		$ok1 = $conexion->query($consulta);
		//elimino pregunta
		$conexion= (New Conexion())->conectar();
		$consulta = "DELETE FROM publicacion WHERE id_publicacion= '$id'";
		$ok2 = $conexion->query($consulta);

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
