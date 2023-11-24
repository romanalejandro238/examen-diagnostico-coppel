<?php
if(!empty($_POST["btnDelete"])){ 
    if(count(array_filter($_POST))==count($_POST)){
        $query = "DROP TABLE IF EXISTS ". $_POST["tableName"] . ";";
        
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