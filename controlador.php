<?php

if (!empty($_POST["btningresar"])) {
    
    if (empty($_POST["usuario"]) and empty($_POST["password"])) {
        echo '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS</div>';
    } else {
        $usuarios=$_POST["usuario"];
        $clave=$_POST["password"];
        $sql=$conexion->query(" select * from usuarios where usuarios='$usuarios' and clave='$clave' ");
        if ($datos=$sql->fetch_object()) {
            header("location:registro_torre.php");
        } else {
            echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
        }
        
    }
    
}

?>