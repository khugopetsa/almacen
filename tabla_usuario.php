<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATOS DE USUARIO</title>


    
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

<!-- tabla       -->
 

<div id="tabla" class="col-8 p-4">

            <?php
            include "conexion_bd.php";
            include "eliminar_usuario.php";
              ?>

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
                          <th scope="col">NOMBRES</th>
                          <th scope="col">APELLIDOS</th>
                          <th scope="col">USUARIOS</th>
                          <th scope="col">CLAVE</th>
                          
                          <th scope="col"></th>
                        </tr>
                      </thead>
                     
              <tbody>
                <?php
                include "conexion_bd.php";
                $sql = $conexion->query(" select * from usuarios ");
                while ($datos = $sql->fetch_object()){?>

                    <tr class="text text-center">
                        <td><?=$datos->idusuario ?></td>
                        <td><?=$datos->nombres ?></td>
                        <td><?=$datos->apellidos ?></td>
                        <td><?=$datos->usuarios ?></td>
                        <td><?=$datos->clave ?></td>
                        
                        
                        <td>
                          <a href="modificar_usuario.php?id=<?=$datos->idusuario?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                          <a onclick="return eliminar()" href="tabla_usuario.php?id=<?=$datos->idusuario?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                          
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
            filename: "D_Usuarios", //Nombre del archivo de Excel
            sheetname: "usuarios", //Título de la hoja
        });
        let datos = tableExport.getExportData();
       let preferenciasDocumento = datos.tabla.xlsx;
      tableExport.export2file(preferenciasDocumento.data, preferenciasDocumento.mimeType, preferenciasDocumento.filename, preferenciasDocumento.fileExtension, preferenciasDocumento.merges, preferenciasDocumento.RTL, preferenciasDocumento.sheetname);
    });
</script>

</body>
</html>
    
</body>
</html>