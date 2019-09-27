<?php
include 'db.php';

class Follower{

    public static function  addFollower($id_usuario_Seguido,$id_usuario_Seguidor){
		$ejemplo= (New Conexion())->conectar();
		$consulta = "INSERT INTO  follower(id_usuario_Seguido,id_usuario_Seguidor) 
		VALUES ('$id_usuario_Seguido','$id_usuario_Seguidor')";
		$resultado = $ejemplo->query($consulta);
		//$ejemplo->desconectar();
		//return $res;
	}
}
    

class Like{

    public function  like($id_usuario,$id){
        $ejemplo= (New Conexion())->conectar();
        $consulta = "INSERT INTO  likee(id_Usuario,id_Pregunta) 
        VALUES ('$id_usuario','$id')";
        $resultado = $ejemplo->query($consulta);
        //$ejemplo->desconectar();
        //return $res;
    }
    public static function  dislike($id_usuario,$id){
        $ejemplo= (New Conexion())->conectar();
        $consulta = "INSERT INTO  dislike(id_Usuario,id_Pregunta) 
        VALUES ('$id_usuario','$id')";
        $resultado = $ejemplo->query($consulta);
        //$ejemplo->desconectar();
        //return $res;
    } 
}
?>
