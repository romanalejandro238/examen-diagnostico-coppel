<?php
class ReadClient {

    static function readClients(){
        include_once("../model/connection.php");
        $query = "select * from clientes";
        $sql = pg_query(Conexion::ConexionBD(),$query);

        return $sql;
    }
}
?>