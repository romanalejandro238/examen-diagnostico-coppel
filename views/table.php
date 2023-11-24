<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Diagnostico</title>
    <link href="../css/index.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
<div class="container-fluid" style="background: rgb(255,255,255);">
    <form class="col-4 pt-4" method="POST" >
        <h2 class="text-center text-secondary">New Insert</h2>

        <?php 
            include_once "../controller/create.php";
            include_once "../controller/read.php";
            $query = ReadClient::readColumns();      
            while($data = pg_fetch_object($query)){
                ?>
                    <div class="mb-3">
                        <label for=<?=$data->column_name?> class="form-label"><?=$data->column_name?></label>
                        <input type="text" class="form-control" name=<?=$data->column_name?>>
                    <div>
            <?php
            }
            ?>
        <div class="mt-2">
            <button type="submit" class="btn btn-primary" value="ok" name="btnInsert">Insert</button>
        <div>
    </form>
    <form action="" method="POST">
        <?php
            include_once "../controller/update.php";
        ?>
        <div class="mt-2">
            <label for="columnName" class="form-label">Column Name</label>
            <input type="text" class="form-control" name="columnName">
        <div>
        <div class="mt-2">
            <button type="submit" class="btn btn-success" value="ok" name="btnAdd">Add</button>
        <div>
    </form>
        
    <div class="col-8 pt-4">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                <?php
                $query = ReadClient::readColumns();
                while($data = pg_fetch_object($query)){?>
                    <th scope="col"><?=$data->column_name?></th>
                <?php
                }
                ?>
                </tr>
                
            </thead>
            <tbody>
            <?php 
                $sql = ReadClient::readTable("clientes");
                while($data = pg_fetch_object($sql)){?>
                    <tr>
                        <?php
                            foreach($data as $key => $value){?>
                                <td><?=$value?></th>
                            <?php
                            }
                            ?>
                    </tr>
                
                <?php
                }
                ?>
            </tbody>
    </table>
    <div>
<div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>