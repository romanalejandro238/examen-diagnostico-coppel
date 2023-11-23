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
    <form class="col-4 pt-4" action="/" >
    <h2 class="text-center text-secondary">Crear o Eliminar Tabla</h2>
        <div class="mb-3">
            <label for="tableName" class="form-label">Nombre de la tabla</label>
            <input type="text" class="form-control" id="tableName">
        <div>
        <div class="mt-2">
            <button type="submit" class="btn btn-primary">Crear</button>
            <button type="submit" class="btn btn-danger">Borrar</button>
        <div>
    </form>
    <div class="col-8 pt-4">
        <form action="/">
            <h2 class="text-center text-secondary">Consultar Tabla</h2>
            <div class="mb-3">
                <label for="tableName" class="form-label">Nombre de tabla</label>
                <input type="text" class="form-control" id="tableName">
            <div>
            <div class="mt-2">
                <button type="submit" class="btn btn-info">Consultar</button>
            <div>
        </form>
    <div>
<div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>