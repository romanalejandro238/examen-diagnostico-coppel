<?php
if(!empty($_POST["btnInsert"])){ 
    if(count(array_filter($_POST))==count($_POST)){

        $query = "INSERT INTO " . $_GET["tableName"] . " VALUES (";
        $values="";
        foreach($_POST as $key => $value){
            if($key == "btnInsert") continue;
            if($key == "tableName") continue;
            if(empty($values)){
                if(is_string($value)){
                    $values = "'" . $value . "'";
                    continue;
                }
                $values = $value;
                continue;
            }
            if(is_string($value)){
                $values = $values . ", " . "'" . $value . "'";
                continue;
            }
            $values = $values . ", " . $value;
        }
        $query = $query . $values . ");";

        include_once "../model/connection.php";
        try{
            pg_query(Conexion::ConexionBD(),$query);
            header("Location:../views/table.php?tableName=".$_GET["tableName"]);
            die();
        }catch(PGException $exp){
            echo $exp;
        }
        
             
    }else{
        $message = "Llene todos los campos antes de enviar";
        echo "<script>alert('$message');</script>";
    }

}

if(!empty($_POST["btnCreate"])){ 
    if(count(array_filter($_POST))==count($_POST)){
        $query = "CREATE TABLE IF NOT EXISTS public." . $_POST["tableName"] . "(" . $_POST["tableName"] . "ID bigint PRIMARY KEY NOT NULL);";
        
        include_once "model/connection.php";
        try{
            pg_query(Conexion::ConexionBD(),$query);
        }catch(PGException $exp){
            echo $exp;
        }
    }else{
        $message = "Llene todos los campos antes de enviar";
        echo "<script>alert('$message');</script>";
    }
    
}


?>