<?php
if (!empty($_POST["registro"])) {
     if (empty($_POST["nombres"]) and empty($_POST["apellidos"]) and empty($_POST["usuarios"]) and empty($_POST["clave"])) {
        echo '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS</div>';
    } else {
        $nombres=$_POST["nombres"];
        $apellidos=$_POST["apellidos"];
        $usuarios=$_POST["usuarios"];
        $clave=$_POST["clave"];
        $sql=$conexion->query(" select * from usuarios where nombres='$nombres' and apellidos='$apellidos' and usuarios='$usuarios' and clave='$clave' ");
        if ($datos=$sql->fetch_object()) {
            header("location:tabla_usuario.php");
        } else {
            echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
        }
        
    }
    
}

?>