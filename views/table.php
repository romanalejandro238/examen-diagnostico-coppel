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
    
<div class="container-fluid row" style="background: rgb(255,255,255);">
    <form class="col-4 pt-4" action="/" >
    <h2 class="text-center text-secondary">Nuevo registro</h2>
        /*codigo para generar el formulario segun los datos de la tabla*/
        <div class="mb-3">
            <label for="ClientID" class="form-label">Cliente</label>
            <input type="text" class="form-control" id="ClientID">
        <div>
        <div class="mb-3">
            <label for="ClientFirstName" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="ClientFirstName">
        <div>
        <div class="mb-3">
            <label for="ClientFatherLastName" class="form-label">Apellido Paterno</label>
            <input type="text" class="form-control" id="ClientFatherLastName">
        <div>
        <div class="mb-3">
            <label for="ClientMotherLastName" class="form-label">Apellido Materno</label>
            <input type="text" class="form-control" id="ClientMotherLastName">
        <div>
        <div class="mt-2">
            <button type="submit" class="btn btn-primary">Insertar</button>
        <div>
        <div class="mt-2">
            <label for="tableName" class="form-label">Nombre de columna</label>
            <input type="text" class="form-control" id="tableName">
        <div>
        <div class="mt-2">
            <button type="submit" class="btn btn-primary">Añadir</button>
        <div>
    </form>
    <div class="col-8 pt-4">
    /*codigo para generar la tabla segun los datos de la base de datos*/
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>mdo</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>fat</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>twitter</td>
                </tr>
            </tbody>
    </table>
    <div>
<div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>