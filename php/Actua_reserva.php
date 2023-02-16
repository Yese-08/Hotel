<?php 
    include 'conexion.php';
    $numero_reserva=$_GET['numero_reserva'];
    $sql="SELECT * FROM reserva WHERE numero_reserva='$numero_reserva'";
    $query=mysqli_query($conexion,$sql);
    $row=mysqli_fetch_array($query);      

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Reserva</title>
    <!-- Lineas importantes-->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/popper.min.js" ></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="../assets/img/log1.png" type="image/x-icon">
</head>
<body>
<!---MENÚ PRINCIPAL-->
<script src="../js/menu3.js"></script>    
<!--FIN MENÚ PRINCIPAL-->    
<!-- Section: Design Block -->
<br><br><br><br>
<section class="text-center text-lg-start">
    <style>
      .cascading-right {
        margin-right: -50px;
      }
  
      @media (max-width: 991.98px) {
        .cascading-right {
          margin-right: 0;
        }
      }
    </style>
  
    <!-- Jumbotron -->
    <div class="container py-4">
      <div class="row g-0 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card cascading-right" style="
              background: hsla(0, 0%, 100%, 0.55);
              backdrop-filter: blur(30px);
              ">
            <div class="card-body p-5 shadow-5 text-center">
              <body style="background-image: url(../assets/img/fondo1.jpg); background-repeat: no-repeat;  background-size: cover; ">
                <div class="container" >
                    <br>
                    <h1 style="font-family:cursive;">Actualizar Reserva</h1><br>
                      
                        <div class="panel panel-primary" >               
                            
                            <div class="panel-body" >            
                            <form action="../php/update_reserva.php" method="post">

                           

                            <div class="row">
                                <div class="col">
                                    <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                        <input class="form-control" name="Codigo" id="Codigo" placeholder="Codigo"  value="<?php echo $row['numero_reserva']  ?>" disabled required/>
                                        <input type="hidden" name="Codigo" id="Codigo" placeholder="Codigo"  value="<?php echo $row['numero_reserva']  ?>" />
                                        <label for="Codigo">Codigo</label><br>
                                    </div>
                                </div>
                                <div class="col">                            
                                    <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                        <input class="form-control" name="Documento"  id="Documento" placeholder="Documento" value="<?php echo $row['numero_documento']  ?>" disabled  required>
                                        <input class="form-control" type="hidden" name="Documento"  id="Documento" placeholder="Documento" value="<?php echo $row['numero_documento']  ?>" disabled  >
                                        <label for="Documento">Documento</label><br>
                                    </div>
                                </div>
                            </div>
                            <div class="row">                       
                                <div class="col">
                                    <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                        <input class="form-control" name="Nombre"  id="Nombre" placeholder="Nombre" value="<?php echo $row['nombre_cliente']  ?>" disabled  required>
                                        <input class="form-control" type="hidden" name="Nombre"  id="Nombre" placeholder="Nombre" value="<?php echo $row['nombre_cliente']  ?>" disabled  required>
                                        <label for="Nombre">Nombre</label><br>
                                    </div>                          
                                </div>        
                                <div class="col">                            
                                    <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                        <input class="form-control" name="Procedencia"  id="Procedencia" placeholder="Procedencia" value="<?php echo $row['nacionalidad']  ?>" disabled required>
                                        <input  type="hidden" name="Procedencia"  value="<?php echo $row['nacionalidad']  ?>"  >
                                        <label for="Procedencia">Procedencia</label><br>
                                    </div>
                                </div>
                            </div>             
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                        <input class="form-control" name="Telefono" id="Telefono" placeholder="Telefono"  value="<?php echo $row['telefono']  ?>" disabled required/>
                                        <input class="form-control" type="hidden" name="Telefono" id="Telefono" placeholder="Telefono"  value="<?php echo $row['telefono']  ?>" disabled />
                                        <label for="Telefono">Telefono</label><br>
                                    </div>
                                </div>
                                <div class="col">                        
                                <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                        <input class="form-control" name="email" id="email" placeholder="email"  value="<?php echo $row['email']  ?>" disabled required/>
                                        <input class="form-control" type="hidden" name="email" id="email" placeholder="email"  value="<?php echo $row['email']  ?>" disabled />
                                        <label for="email">Email</label><br>
                                    </div>
                                </div>
                            </div>
                            <!--editable-->
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                        <input class="form-control" name="Habitacion" id="Habitacion" placeholder="Habitacion"  value="<?php echo $row['numero_hab']  ?>"  required/>
                                        <label for="Habitacion">Habitacion</label><br>
                                    </div>
                                </div>
                                <div class="col">                            
                                    <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                        <input class="form-control" name="Costo"  id="Costo" placeholder="Costo habitacion" value="<?php echo $row['costo']  ?>"   required onchange="totalPagar();">
                                        <label for="Costo">Costo habitacion</label><br>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                        <input class="form-control" name="N_Persona" id="N_Persona" placeholder="N_Persona"  value="<?php echo $row['numero_personas']  ?>"  required/>
                                        <label for="N_Persona">N° Personas</label><br>
                                    </div>
                                </div>
                                <div class="col">                            
                                    <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                        <input class="form-control" name="Fecha_ingreso"  id="Fecha_ingreso" placeholder="Fecha_ingreso" value="<?php echo $row['fecha_ingreso']  ?>"   required>
                                        <label for="Fecha_ingreso">Fecha ingreso</label><br>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                        <input class="form-control" name="Fecha_salida"  id="Fecha_salida" placeholder="Fecha_salida" value="<?php echo $row['fecha_salida']  ?>"   required>
                                        <label for="Fecha_salida">Fecha salida</label><br>
                                    </div>
                                    
                                </div>
                                <div class="col">                            
                                <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                        <input class="form-control" name="N_Noches" id="N_Noches" placeholder="N_Noches"  value="<?php echo $row['numero_noches']  ?>"  required onchange="totalPagar();">
                                        <label for="N_Noches"> Noches</label><br>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                        <input class="form-control" name="Servicios"  id="Servicios" placeholder="Servicios" value="<?php echo $row['servicios_adicionales']  ?>"   required>
                                        <label for="Servicios">Servicios</label><br>
                                    </div>
                                    
                                </div>
                                <div class="col">                            
                                <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                        <input class="form-control" name="Costos_servicios" id="Costos_servicios" placeholder="Costos_servicios"  value="<?php echo $row['costo_servicio']  ?>"  required onchange="totalPagar();">
                                        <label for="Costos_servicios"> Costo servicios</label><br>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    
                                </div>                        
                                <div class="col"  >
                                    <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                        <input class="form-control"   name="TPagar"  id="TPagar" placeholder="Total a pagar"  value="<?php echo $row['total_pagar']  ?>"  required onchange="totalPagar();">
                                        <label for="TPagar">Total a pagar</label><br>
                                    </div>                            
                                </div>
                                
                            </div>
                                   
                            <div class="container text-center">
                                <div class="row">                          
                                <div class="col align-self-center">
                                    <button type="submit" class="btn btn-primary">
                                        Actualizar
                                    </button>
                        
                                </div>                          
                                </div>
                            </div>   
                            <!--editable-->
                            </form>
                            
                            </div>
                        </div>
                   
                </div>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="https://img.freepik.com/vector-premium/icono-linea-archivo-computadora-portatil-actualizar-informacion-datos-adjuntar-flechas-boton-actualizacion-concepto-conjunto-datos-estilo-glassmorphism-icono-linea-vectorial-negocios-publicidad_661108-1468.jpg" 
          class="w-100 rounded-4 shadow-4" alt="" height="820" />
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->
  <script>
        // si la respuesta que se espera es sumar
        function totalPagar(){
            var CostoH = document.getElementById('Costo').value;
            var CServicio = document.getElementById('Costos_servicios').value;
            var Nnoches = document.getElementById('N_Noches').value;

            if(CostoH !=='' && CServicio!==''){
                var suma = parseInt(CostoH )+parseInt(CServicio);
                var sumCosHbSer = parseInt(suma)*parseInt(Nnoches);
                document.getElementById('TPagar').value = sumCosHbSer;
            }
        
        } 
    </script>
</body>
</html>