<?php

if (!empty($_POST["btnregistrar"])) {
    
    if (!empty($_POST["fecha"]) and !empty($_POST["movimiento"]) and !empty($_POST["n_torre"]) and !empty($_POST["torre"]) and !empty($_POST["codigo"]) and !empty($_POST["altura"]) and !empty($_POST["base"]) and !empty($_POST["u_p"]) and !empty($_POST["descripcion"]) and !empty($_POST["total"]) and !empty($_POST["rack"]) and !empty($_POST["ubicacion"])){
  
        $id=$_POST["id"];
        $fecha=$_POST["fecha"];
        $movimiento=$_POST["movimiento"];
        $n_torre=$_POST["n_torre"];
        $torre=$_POST["torre"];
        $codigo=$_POST["codigo"];
        $altura=$_POST["altura"];
        $base=$_POST["base"];
        $u_p=$_POST["u_p"];
        $descripcion=$_POST["descripcion"];
        $total=$_POST["total"];
        $rack=$_POST["rack"];
        $ubicacion=$_POST["ubicacion"];

        $sql=$conexion->query(" update registro_torre set fecha='$fecha', movimiento='$movimiento', n_torre='$n_torre', torre='$torre', codigo='$codigo', altura='$altura', base='$base', u_p='$u_p', descripcion='$descripcion', total='$total', rack='$rack', ubicacion='$ubicacion' where id_torre='$id'" );
    if ($sql==1) {
        header("location:registro_torre.php");
      
    } else {
        echo '<div class="alert alert-danger">error al modificar</div>';
    }
    
    
    } else {
        echo '<div class="alert alert-warning">algunos de los campos estan vacios</div>';
    }
    
}
?>