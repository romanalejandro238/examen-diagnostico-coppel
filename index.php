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

<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
        </svg>
      INDEX
    </a>
  </div>
</nav>
    
<div class="container-fluid row " style="background: rgb(255,255,255);">
    <form class="col-4 pt-4" method="POST" >
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
        <form method="POST">
        <?php
            include_once "controller/redirect.php";
        ?>
            <h2 class="text-center text-secondary">Consult Table</h2>
            <div class="mb-3">
                <label for="tableConsultName" class="form-label">Table Name</label>
                <input type="text" class="form-control" name="tableConsultName">
            <div>
            <div class="mt-2">
                <button type="submit" class="btn btn-primary" value="ok" name="btnConsult">Consult</button>
            <div>
        </form>
    <div>
<div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>