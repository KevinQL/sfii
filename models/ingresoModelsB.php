<?php

require_once "conexion.php";

class IngresoModelsB{

    public function ingresoModels($datosModel,$tabla){
        $tmt=Conexion::conectar()->prepare("SELECT Cargo,Clave  From $tabla WHERE Cargo=:usuario");
        $tmt->bindParam(":usuario",$datosModel["usuario"],PDO::PARAM_STR);
        //$tmt->bindParam(":password",$datosModel["password"],PDO::PARAM_STR);
        $tmt->execute();
        return $tmt->fetch();
        $tmt-> close();
    }

    public function intentosModels($datosModel,$tabla){
        $stmt=Conexion::conectar()->prepare("UPDATE $tabla SET intentos = :intentos WHERE usuario = :usuario");
        $stmt -> bindParam(":intentos", $datosModel["actualizarIntentos"], PDO::PARAM_INT);
        $stmt -> bindParam(":usuario", $datosModel["usuarioActual"], PDO::PARAM_STR);
        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }


    }
}
