<?php

include "conexion_bd.php";

    $id=$_GET["id"];

    $sql=$conexion->query(" select * from registro_torre where id_torre=$id ");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<form class="col-4 p-3 m-auto" method="POST">
              <h5 class="text-center text-secondary">MODIFICAR TORRES</h5>

              <input type="hidden" name="id" value="<?= $_GET["id"]?>">
              <?php
              include "controlado_modificar_torre.php";

              while ($datos=$sql->fetch_object()){?>
                
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">FECHA</label>
                          <input type="date" class="form-control" name="fecha" value="<?=$datos->fecha?>">
                        </div>

                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">MOVIMIENTO</label>
                        <input type="text" class="form-control" name="movimiento" value="<?=$datos->movimiento?>">
                        </div>
                                    
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">FECHA VENCIMIENTO</label>
                        <input type="date" class="form-control" name="n_torre" value="<?=$datos->n_torre?>">
                        </div>   

                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">TORRE</label>
                        <input type="text" class="form-control" name="torre" value="<?=$datos->torre?>">
                        </div>

                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">CODIGO</label>
                        <input type="text" class="form-control" name="codigo" value="<?=$datos->codigo?>">
                        </div>

                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ALTURA</label>
                        <input type="text" class="form-control" name="altura" value="<?=$datos->altura?>">
                        </div>

                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">BASE</label>
                        <input type="text" class="form-control" name="base" value="<?=$datos->base?>">
                        </div>

                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">U_Presentacion</label>
                        <input type="text" class="form-control" name="u_p" value="<?=$datos->u_p?>">
                        </div>

                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">DESCRIPCION</label>
                        <input type="text" class="form-control" name="descripcion" value="<?=$datos->descripcion?>">
                        </div>

                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">TOTAL</label>
                        <input type="text" class="form-control" name="total" value="<?=$datos->total?>">
                        </div>

                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">RACK</label>
                        <input type="text" class="form-control" name="rack" value="<?=$datos->rack?>">
                        </div>

                            
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label ">UBICACION</label>
                        <input type="text" class="form-control" name="ubicacion" value="<?=$datos->ubicacion?>">
                        </div>        

             <?php }

              ?>
                

            
                
                
                <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">MODIFICAR</button>
            </form>

</body>
</html>