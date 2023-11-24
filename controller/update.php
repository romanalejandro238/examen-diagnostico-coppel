<?php


if(!empty($_POST["btnAdd"])){ 


    if(count(array_filter($_POST))==count($_POST)){
        
        $query = "ALTER TABLE " . $_GET["tableName"] . " ADD COLUMN ";
        $values = $_POST["columnName"];

        if(is_string($values)){
            $query = $query . $values . " character varying(50)";
            include_once "../model/connection.php";
            try{
                pg_query(Conexion::ConexionBD(),$query);
            }catch(PGException $exp){
                echo $exp;
            }
        }else{
                $message = "Solo se aceptan valores de tipo cadena de caracteres";
                echo "<script>alert('$message');</script>";
            }
        }
}




?>