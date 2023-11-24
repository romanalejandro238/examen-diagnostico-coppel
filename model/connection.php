<?php
class Conexion {

    static function ConexionBD(){
        $host = "localhost";
        $dbname  = "examen-diagnostico-coppel";
        $username = "postgres";
        $password = "root";

        try{
            $conexion = pg_connect("host=$host dbname=$dbname user=$username password=$password");
        }
        catch(PDOException $exp){
            echo ("No se pudo conectar a la base de datos, $exp");
        }

        return $conexion;
    }
    
}
?>