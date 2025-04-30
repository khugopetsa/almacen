<?php

if (!empty($_POST{"btnregistrar"})) {

if (!empty($_POST["fecha"]) and !empty($_POST["movimiento"]) and !empty($_POST["n_torre"]) and !empty($_POST["codigo"]) and !empty($_POST["altura"]) and !empty($_POST["base"]) and !empty($_POST["u_p"]) and !empty($_POST["descripcion"]) and !empty($_POST["total"]) and !empty($_POST["rack"]) and !empty($_POST["ubicacion"])){
  
    
    $fecha=$_POST["fecha"];
    $movimiento=$_POST["movimiento"];
    $n_torre=$_POST["n_torre"];
    $codigo=$_POST["codigo"];
    $altura=$_POST["altura"];
    $base=$_POST["base"];
    $u_p=$_POST["u_p"];
    $descripcion=$_POST["descripcion"];
    $total=$_POST["total"];
    $rack=$_POST["rack"];
    $ubicacion=$_POST["ubicacion"];

    $sql=$conexion->query(" insert into registro_torre(fecha,movimiento,n_torre,codigo,altura,base,u_p,descripcion,total,rack,ubicacion)values('$fecha','$movimiento','$n_torre','$codigo','$altura','$base','$u_p','$descripcion','$total','$rack','$ubicacion') ");
    if ($sql==1) {
        echo '<div class="alert alert-success">registro exitoso</div>';
    } else {
        echo '<div class="alert alert-danger">error al registrar</div>';
    }
    

} else {
    echo '<div class="alert alert-warning">algunos de los campos estan vacios</div>';
}

  
}

?>