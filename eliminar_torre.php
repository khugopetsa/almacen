<?php
if (!empty($_GET["id"])) {
    $id=$_GET["id"];

    $sql=$conexion->query("delete from registro_torre where id_torre=$id ");

    if ($sql==1) {
        echo '<div class="alert alert-success">Torre eliminado corectamente</div>';
    } else {
        echo '<div class="alert alert-danger">Error al eliminar</div>';
    }
    
}  

?>

