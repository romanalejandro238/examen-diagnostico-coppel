<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Diagnostico</title>
    <link href="css/index.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
<div class="container-fluid row " style="background: rgb(255,255,255);">
    <form class="col-4 pt-4" Method="POST" >
    <h2 class="text-center text-secondary">Create or Delete Table</h2>

        <?php
            include_once "controller/create.php";
            include_once "controller/delete.php";
        ?>
        <div class="mb-3">
            <label for="tableName" class="form-label">Table Name</label>
            <input type="text" class="form-control" name="tableName">
        <div>
        <div class="mt-2">
            <button type="submit" class="btn btn-primary" name="btnCreate" value="ok">Create</button>
            <button type="submit" class="btn btn-danger" name="btnDelete" value="ok">Delete</button>
        <div>
    </form>
    <div class="col-8 pt-4">
        <form action="/">
            <h2 class="text-center text-secondary">Consult Table</h2>
            <div class="mb-3">
                <label for="tableName" class="form-label">Table Name</label>
                <input type="text" class="form-control" name="tableName">
            <div>
            <div class="mt-2">
            <a href="views/table.php" class="btn btn-primary" name="btnConsult" value="ok">Consult<a>
            <div>
        </form>
    <div>
<div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>