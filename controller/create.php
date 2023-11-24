<?php



if(!empty($_POST["btnInsert"])){ 
    if(count(array_filter($_POST))==count($_POST)){
        $query = "INSERT INTO clientes VALUES (";
        $values="";
        foreach($_POST as $key => $value){
            if($key == "btnInsert") continue;
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
        }catch(PGException $exp){
            echo $exp;
        }
        
             
    }else{
        $message = "Llene todos los campos antes de enviar";
        echo "<script>alert('$message');</script>";
    }

}





?>