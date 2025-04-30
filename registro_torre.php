<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO DE TORRES</title>
    <!-- css online -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a9b3ecfc69.js" crossorigin="anonymous"></script>


<!-- links para exportar a excel -->
<script src="https://unpkg.com/xlsx@0.16.9/dist/xlsx.full.min.js"></script>
    <script src="https://unpkg.com/file-saverjs@latest/FileSaver.min.js"></script>
    <script src="https://unpkg.com/tableexport@latest/dist/js/tableexport.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">



</head>
<body>

<script>
function eliminar(){
  var respuesta=confirm("Estas seguro que deseas eliminar?");
  return respuesta
}

</script>


<h1 class="text-center p-3">REGISTRO DE TORRES</h1>

    <?php
       include "conexion_bd.php";
      include "eliminar_torre.php";
    ?>

   <div class="container-fluid row">
            <form class="col-2 p-3" method="POST">
              <h3 class="text-center text-secondary">REGISTRO</h3>

              <?php
               
           
              include "controlador_torre.php";
              ?>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">FECHA</label>
                  <input type="date" class="form-control" name="fecha">
                </div>

                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">MOVIMIENTO</label>
                <input type="text" class="form-control" name="movimiento">
                </div>
                             
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">FECHA VENCIMIENTO</label>
                <input type="date" class="form-control" name="n_torre">
                </div>   

                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">TORRE</label>
                <input type="text" class="form-control" name="torre">
                </div>

                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">CODIGO</label>
                <input type="text" class="form-control" name="codigo">
                </div>

                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ALTURA</label>
                <input type="text" class="form-control" name="altura">
                </div>

                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">BASE</label>
                <input type="text" class="form-control" name="base">
                </div>

                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">U_Presentacion</label>
                <input type="text" class="form-control" name="u_p">
                </div>

                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DESCRIPCION</label>
                <input type="text" class="form-control" name="descripcion">
                </div>

                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">TOTAL</label>
                <input type="text" class="form-control" name="total">
                </div>

                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">RACK</label>
                <input type="text" class="form-control" name="rack">
                </div>

                    
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label ">UBICACION</label>
                <input type="text" class="form-control" name="ubicacion">
                </div>

                
                <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">REGISTRAR</button>
                
            </form>

      <!-- tabla       -->
            <div id="tabla" class="col-10 p-4">
            <a href="index.php" class="btn btn-small btn-danger"><i class="fa-solid fa-right-from-bracket"></i></i>Salir</a>
                  <table  class="table">
              <!-- PARA RXPORTAR EXCEL  -->
                  <button id="btnExportar" class="btn btn-success">
                <i class="fas fa-file-excel"></i> Exportar datos a Excel
            </button>
                    
                    <!-- FIN -->


                 <thead class="bg-info">
                        <tr class="text text-center">
                          <th scope="col">ID</th>
                          <th scope="col">FECHA</th>
                          <th scope="col">MOVIMIENTO</th>
                          <th scope="col">F_V</th>
                          <th scope="col">TORRE</th>
                          <th scope="col">CODIGO</th>
                          <th scope="col">ALTURA</th>
                          <th scope="col">BASE</th>
                          <th scope="col">U_P</th>
                          <th scope="col">DESCRIPCION</th>
                          <th scope="col">TOTAL</th>
                          <th scope="col">RACK</th>
                          <th scope="col">UBICACION</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                     
              <tbody>
                <?php
                include "conexion_bd.php";
                $sql = $conexion->query(" select * from registro_torre ");
                while ($datos = $sql->fetch_object()){?>

                    <tr class="text text-center">
                        <td><?=$datos->id_torre ?></td>
                        <td><?=$datos->fecha ?></td>
                        <td><?=$datos->movimiento ?></td>
                        <td><?=$datos->n_torre ?></td>
                        <td><?=$datos->torre ?></td>
                        <td><?=$datos->codigo ?></td>
                        <td><?=$datos->altura ?></td>
                        <td><?=$datos->base ?></td>
                        <td><?=$datos->u_p ?></td>
                        <td><?=$datos->descripcion?></td>
                        <td><?=$datos->total?></td>
                        <td><?=$datos->rack?></td>
                        <td><?=$datos->ubicacion ?></td>
                        
                        <td>
                          <a href="modificar_torre.php?id=<?=$datos->id_torre?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                          <a onclick="return eliminar()" href="registro_torre.php?id=<?=$datos->id_torre?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                          
                        </td>
                       
                      </tr>

                <?php }
                              
                ?>
                      
              
              </tbody>
             </table> 


            </div>
                
                        
                        
          </div>



            </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<!-- script para exportar a excel -->
<script>
    const $btnExportar = document.querySelector("#btnExportar"),
        $tabla = document.querySelector("#tabla");

    $btnExportar.addEventListener("click", function() {
        let tableExport = new TableExport($tabla, {
            exportButtons: false, // No queremos botones
            filename: "Reporte", //Nombre del archivo de Excel
            sheetname: "Rgistro de torres", //Título de la hoja
        });
        let datos = tableExport.getExportData();
       let preferenciasDocumento = datos.tabla.xlsx;
      tableExport.export2file(preferenciasDocumento.data, preferenciasDocumento.mimeType, preferenciasDocumento.filename, preferenciasDocumento.fileExtension, preferenciasDocumento.merges, preferenciasDocumento.RTL, preferenciasDocumento.sheetname);
    });
</script>

</body>
</html>