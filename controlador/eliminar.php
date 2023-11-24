<?php
if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion->query("DELETE FROM personas WHERE id_persona=$id");
    if ($sql==1) {
        echo '<div class="alert alert-success">Se ha eliminado correctamente</div>';
    } else {
        echo '<div class="alert alert-danger">Erro al eliminar</div>';
    }
    
}

?>