<?php

if (!empty($_POST["registro"])) {
    
   if (!empty($_POST["nombres"]) and !empty($_POST["apellidos"]) and !empty($_POST["usuarios"]) and !empty($_POST["clave"])) {

        $id=$_POST["id"];
        $nombres=$_POST["nombres"];
        $apellidos=$_POST["apellidos"];
        $usuarios=$_POST["usuarios"];
        $clave=$_POST["clave"];

        $sql=$conexion->query(" update usuarios set nombres='$nombres', apellidos='$apellidos', usuarios='$usuarios', clave='$clave' where idusuario='$id'" );
    if ($sql==1) {
        header("location:tabla_usuario.php");
      
    } else {
        echo '<div class="alert alert-danger">error al modificar</div>';
    }
    
    
    } else {
        echo '<div class="alert alert-warning">algunos de los campos estan vacios</div>';
    }
    
}
?>