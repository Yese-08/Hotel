<!DOCTYPE html>
<html>
  <head>
      <meta charset='utf-8'>
      <meta http-equiv='X-UA-Compatible' content='IE=edge'>
      <title>Registrar habitación</title>

      <!-- Lineas importantes-->
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <script src="../js/popper.min.js" ></script>
      <script src="../js/bootstrap.bundle.min.js"></script>
      <link rel="shortcut icon" href="../assets/img/log1.png" type="image/x-icon">
      
  </head>
  <body style="background-image: url(../assets/img/fondo1.jpg); background-repeat: no-repeat;  background-size: cover;">
    <!---MENÚ PRINCIPAL-->
    <script src="../js/menu.js"></script>    
    <!--FIN MENÚ PRINCIPAL-->
    
    <br><br>
    <br><br>
    <!---INICIO CONTENIDO-->
                                   
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Registrar_Habitacion" data-bs-whatever="@mdo">Registrar habitación</button>
  <div class="modal fade" id="Registrar_Habitacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="../php/Reg_habitacion.php" method="post">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="Registrar">Registrar habitación</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
           
          <div>
              <select class="form-select" aria-label="Default select example" id="categoria" name="categoria"  required>
                <option selected>Categoria</option>
                <option value="Simple">Simple</option>
                <option value="Doble">Doble</option>
                <option value="Suite">Suite</option>               
              </select>
              <br>
          </div>
            

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="Detalles" id="Detalles" placeholder="ventilador, TV64pl" required>
                <label for="Detalles">Detalles</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="Precio" id="Precio" placeholder="$50.000" required>
                <label for="Precio">Precio</label>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Registrar</button>
              </div>
            </div>
            
          </div>
          
          
        </form>
      </div>
    </div>
  </div>
   <!--  INICIO VIZULIZACION DE TABLA--> 
   <br><br>        
        <br><br>
        <div class="container mt-5">
            <div class="row">                         
                <div class="col-md-3">
                    <h2>Buscar habitacion</h2>

                        <form action="Registro_Habitacion.php" method="POST">
                            <input type="text" class="form-control mb-3" name="buscar" placeholder="Numero habitacion" >
                             
                            <input type="submit" class="btn btn-primary" value="Buscar">
                        </form>
                        
                       
                        <br>
    
                        </div>
                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>N° habitacion</th>
                                        <th>Categoria</th>
                                        <th >Detalles</th>
                                        <th >Precio</th>                           
                                        <th>Estado </th>
                                        <th>Actualizar </th>
                                        
                                        <th></th>
                                        
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                        include '../php/buscar.php';
                                        $query= buscar('habitacion','numero_hab');
                                        while($row=mysqli_fetch_array($query)){
                                        
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['numero_hab']?></th>
                                                <th><?php  echo $row['categoria']?></th>
                                                <th><?php  echo $row['detalles']?></th>
                                                <th><?php  echo "$".$row['precio']?></th>                                       
                                                <th></th>  
                                                <th><a href="../php/Actua_habitacion.php?numero_hab=<?php echo $row['numero_hab'] ?>"> <img src="../assets/img/icon3.png" alt="Actualizar" width="30" height="24"></a></th>                                                                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                        
                              </tbody>                                
                </div>
            </div>  
        </div>
    </body>
</html>
  <!--fin vizuliazar tabla-->          
      
  </body>
</html>