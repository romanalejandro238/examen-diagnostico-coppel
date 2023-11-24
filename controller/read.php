<?php
class ReadClient {

    static function readTable($tableName){
        include_once "../model/connection.php";
        $query = "select * from " . $tableName;
        try{
            $sql = pg_query(Conexion::ConexionBD(),$query);
        }catch(PGException $exp){
            echo $exp;
        }
        

        return $sql;
    }

    static function readColumns(){
        include_once "../model/connection.php";
        $query = "select COLUMN_NAME from INFORMATION_SCHEMA.COLUMNS where TABLE_NAME = 'clientes' order by ORDINAL_POSITION";
        try{
            $sql = pg_query(Conexion::ConexionBD(),$query);
        }catch(PGException $exp){
            echo $exp;
        }
        
        return $sql;
    }

}
?>