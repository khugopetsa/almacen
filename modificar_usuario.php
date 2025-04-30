<?php

include "conexion_bd.php";

    $id=$_GET["id"];

    $sql=$conexion->query(" select * from usuarios where idusuario=$id ");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/estilo.css">
   <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
   <!-- <link rel="stylesheet" href="css/all.min.css"> -->
   <!-- <link rel="stylesheet" href="css/fontawesome.min.css"> -->

</head>
<body>
    
<div class="container">

        <form action="" method="POST" class="formulario">
                <h2 class="text-center text-secondary">MODIFICAR</h2>
                
                <input type="hidden" name="id" value="<?= $_GET["id"]?>">

              <?php

                include "controlador_modificar_usuario.php";
                while ($datos=$sql->fetch_object()){?>

                <div class="padre">
                    <div class="nombre">
                        <label for="">NOMBRES</label>
                        <input type="text" name="nombres" value="<?=$datos->nombres?>">

                    </div>

                    <div class="apellido">
                        <label for="">APELLIDOS</label>
                        <input type="text" name="apellidos" value="<?=$datos->apellidos?>">

                    </div>

                    <div class="usuario">
                        <label for="">USUARIO</label>
                        <input type="text" name="usuarios" value="<?=$datos->usuarios?>">

                    </div>

                    <div class="clave">
                        <label for="">CONTRASEÑA</label>
                        <input type="password" name="clave" value="<?=$datos->clave?>">

                    </div>
                    
                    <?php }

                    ?>

                    <div class="cuenta">
                        <input class="boton" type="submit" value="Guardar" name="registro">
                        

                    </div>

                </div>


        </from>
     
    </div>
   

</body>
</html>