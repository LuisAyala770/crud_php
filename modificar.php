<?php
include("modelo/conexion.php");
$id = $_GET["id"];
$sql = $conexion->query("SELECT * FROM personas WHERE id_persona=$id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f40677b3d8.js" crossorigin="anonymous"></script>
</head>

<body>

    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center text-secondary">Modificar registro Personas</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"]?>">
        <?php
        include("controlador/modificar_php.php");
        while ($datos = $sql->fetch_object()) { ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre/s</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido" value="<?= $datos->apellido?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DNI</label>
                <input type="text" class="form-control" name="dni" value="<?= $datos->dni?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" name="fecha" value="<?= $datos->fecha?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" name="correo"  value="<?= $datos->correo?>">
            </div>
        <?php }
        ?>
        <button type="submit" class="btn btn-primary" name="btnmodificar" value="ok">Guardar cambios</button>
    </form>
</body>

</html>