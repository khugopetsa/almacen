<?php
if (!empty($_POST["registro"])) {
    if (empty($_POST["nombres"]) or empty($_POST["apellidos"]) or empty($_POST["usuarios"]) or empty($_POST["clave"])) {
        echo '<div class="alerta">LOS CAMPOS ESTAN VACIOS</div>';
    } else {
        $nombres=$_POST["nombres"];
        $apellidos=$_POST["apellidos"];
        $usuarios=$_POST["usuarios"];
        $clave=$_POST["clave"];
        $sql=$conexion->query(" insert into usuarios(nombres,apellidos,usuarios,clave)values('$nombres','$apellidos','$usuarios','$clave')");
        if ($sql==1) {
            echo '<div class="success">Torre eliminado correctamente</div>';
        } else {
            echo '<div class="ALERTA">ERROR AL REGISTRAR </div>';
        }
        

    }
    
}

?>