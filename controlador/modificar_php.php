<?php
if (!empty($_POST["btnmodificar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["dni"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])) {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $fecha = $_POST["fecha"];
        $correo = $_POST["correo"];

        $sql = $conexion->query("UPDATE personas SET nombre='$nombre',apellido='$apellido',dni='$dni',fecha='$fecha',correo='$correo' WHERE id_persona=$id");
        if ($sql == 1) {
            header("location:index.php");
        } else {
            echo '<div class="alert alert-danger">Erro al modificar el registro</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Uno o más campos estan vacios</div>';
    }
} else {
    # code...
}
