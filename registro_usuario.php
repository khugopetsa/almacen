<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- css online -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a9b3ecfc69.js" crossorigin="anonymous"></script>


   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/estilo.css">
   <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
   <!-- <link rel="stylesheet" href="css/all.min.css"> -->
   <!-- <link rel="stylesheet" href="css/fontawesome.min.css"> -->
   <link href="https://tresplazas.com/web/img/big_punto_de_venta.png" rel="shortcut icon">
   <title>Inicio de sesión</title>
</head>

<body>
   
   <div class="container">
    
        <form action="" method="POST" class="formulario">
                <h2 class="titulo">REGISTAR</h2>
                
                <?php
                include("conexion_bd.php");
                include("controlador_registar_usuario.php");
                include("controlador_acces_registro_r.php");


                ?>

                <div class="padre">
                    <div class="nombre">
                        <label for="">NOMBRES</label>
                        <input type="text" name="nombres"></input>

                    </div>

                    <div class="apellido">
                        <label for="">APELLIDOS</label>
                        <input type="text" name="apellidos"></input>

                    </div>

                    <div class="usuario">
                        <label for="">USUARIO</label>
                        <input type="text" name="usuarios"></input>

                    </div>

                    <div class="clave">
                        <label for="">CONTRASEÑA</label>
                        <input type="password" name="clave"></input>

                    </div>
                    
                    
                    <div class="cuenta">
                        <input class="boton" type="submit" value="registrar" name="registro">
                      
                    </div>
                    <div class="text text-center">
                    <a href="tabla_usuario.php" class="btn btn-small btn-warning"><i class="fa-solid fa-user-tie"></i></i>USUARIOS</a>
                    <a href="index.php" class="btn btn-small btn-danger"><i class="fa-solid fa-house"></i></i>INICIO</a>
                    </div>

                </div>


        </from>
     
    </div>
   
  
</body>

</html>