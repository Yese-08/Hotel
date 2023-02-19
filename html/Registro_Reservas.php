<?php 
include '../php/function_validarSesion.php'
?>
<!DOCTYPE html>
<?php
  if($_SESSION['user']== 'Recepcionista'){?>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Registrar Reserva</title>

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
  <a href="http://localhost/proyecto/html/reserva_habitacion.php">
    <button type="button" class="btn btn-primary" name="regReserva" id="regReserva" >Registrar reserva</button>
  </a>
  <!--FIN CONTENIDO-->
  <!--  INICIO VIZULIZACION DE TABLA--> 
  <br><br>        
  <br><br>
  <div class="container mt-5">
      <div class="row">                         
          <div class="col-md-3">
              <h2 class="">Buscar reserva</h2>

              <div class="container mt-5">
                <form action="Registro_Reservas.php" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Código de reserva" name="buscar">
                    <button type="submit"> <img src="../assets/img/lupa.png" alt="x" ></button>
                </div>
                </form>
                </div>

                  </div>
                  <div class="col">
                      <table class="table table-striped table-hover table-primary " >
                          <thead class=" table-striped table-dark" >
                              <tr>
                                  
                                  <th>Codigo</th>
                                  <th>N° Documento</th>
                                  <th>Nombre</th>
                                  <th>Procedencia</th>
                                  <th>Telefono</th>
                                  <th>Email</th>
                                  <th>Habitacion</th>
                                  <th>Costo Habitacion</th>
                                  <th>N° Personas</th>
                                  <th>Fecha Ingreso</th>
                                  <th>fecha Salidad</th>
                                  <th>Noches</th>
                                  <th>Servicios</th>
                                  <th>Costo Servicio</th>
                                  <th>Total </th>
                                  <th>Actualizar</th>
                                  <th>Eliminar</th>
                              </tr>
                          </thead>

                          <tbody>
                                  <?php
                                  include '../php/buscar.php';
                                  $query= buscar('reserva','numero_reserva');
                                  while($row=mysqli_fetch_array($query)){
                                  
                                  ?>
                                      <tr>
                                          <th><?php  echo $row['numero_reserva']?></th>                             
                                          <th><?php  echo $row['numero_documento']?></th>
                                          <th><?php  echo $row['nombre_cliente']?></th>                                   
                                          <th><?php  echo $row['nacionalidad']?></th>
                                          <th><?php  echo $row['telefono']?></th>
                                          <th><?php  echo $row['email']?></th>
                                          <th><?php  echo $row['numero_hab']?></th>
                                          <th><?php  echo  "$".$row['costo']?></th>
                                          <th><?php  echo $row['numero_personas']?></th>
                                          <th><?php  echo$row['fecha_ingreso']?></th>
                                          <th><?php  echo $row['fecha_salida']?></th>
                                          <th><?php  echo $row['numero_noches']?></th>
                                          <th><?php  echo $row['servicios_adicionales']?></th>
                                          <th><?php  echo  "$".$row['costo_servicio']?></th>
                                          <th><?php  echo  "$".$row['total_pagar']?></th>
                                          
                                          <th><a href="../php/Actua_reserva.php?numero_reserva=<?php echo $row['numero_reserva'] ?>"> <img src="../assets/img/icon3.png" alt="Actualizar" width="30" height="24"></a></th>    
                                          <th><a href="../php/eliminar_reserva.php?numero_reserva=<?php echo $row['numero_reserva'] ?>"> <img src="../assets/img/iconEliminar.png" alt="Eliminar" width="30" height="24"></a></th>                                                                                                                                                                            
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
<?php
}else{echo 'usuario no tiene acceso';}?>