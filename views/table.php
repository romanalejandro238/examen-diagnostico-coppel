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
<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
        </svg>
      INDEX
    </a>
  </div>
</nav>   
<div class="container-fluid" style="background: rgb(255,255,255);">

    <?php 
        include_once "../controller/create.php";
        include_once "../controller/read.php";

        $tableName = $_GET['tableName'];
        $query = ReadClient::readColumns($tableName);
    ?> 
    <form action="../controller/create.php?tableName=<?=$tableName?>" class="col-4 pt-4" method="POST">
        <h2 class="text-center">New Insert</h2>
            <?php      
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
    
    
    <form action="../controller/update.php?tableName=<?=$tableName?>" method="POST">
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
                $query = ReadClient::readColumns($tableName);
                while($data = pg_fetch_object($query)){?>
                    <th scope="col"><?=$data->column_name?></th>
                <?php
                }
                ?>
                </tr>
                
            </thead>
            <tbody>
            <?php 
                $sql = ReadClient::readTable($tableName);
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