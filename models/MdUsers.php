<?php
    require_once "MdConexion.php";
    class Mdusuarios{
        static public function MIniciarSesion($tbBD,$datos){
            $conexion =new ConexionBD;
            $usuario = "'".$datos["usuario"]."'";
            $consulta = 'select * from '.$tbBD.' where Uemail = :usuario';
            $pdo = $conexion->conexionBD()->prepare($consulta);
            $pdo -> bindParam(':usuario',$datos["usuario"],PDO::PARAM_STR);
            //$pdo -> bindValue(':usuario',$usuario,PDO::PARAM_STR);
            $pdo -> execute();
            return $pdo -> fetch();
            $pdo -> null;

        }        
    }