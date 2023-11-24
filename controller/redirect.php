<?php

if(!empty($_POST["btnConsult"])){ 

    if(count(array_filter($_POST))==count($_POST)){
        $values = $_POST["tableConsultName"];
        header("Location:views/table.php?tableName=".$values);
        die();
    }

}

?>