<?php 
    include 'conexion.php';
    session_start();
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
<!---MENÚ PRINCIPAL-->
<script src="../js/menu.js"></script>    
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
                                    <div class="col-xs-4  col-md-7 col-lg-8" style="margin: 0 auto;" >
                                    <label for="Genero">Número de habitación</label>
                                        <br><select class="form-select" aria-label="Default select example" name="Nhabitacion" id="Nhabitacion"  onblur=" Auto();">
                                        <option selected><?php echo $row['numero_hab']  ?></option>
                                        
                                        <?php
                                            include "../php/buscar.php";
                                            $getServicios2= mostrar('habitacion','numero_hab');
                                        
                                            while($row = mysqli_fetch_array($getServicios2)){
                                                $numero_hab = $row['numero_hab'];
                                                $precio = $row['precio'];

                                                ?>
                                                <option value="<?php echo $numero_hab; ?>"><?php echo $numero_hab; ?></option>
                                                <?php
                                        }

                                        ?>
                                        </select> <br>
                                    </div>
                                </div>
                            
                                <div class="col">                            
                                    <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                        <input class="form-control" name="CostoH"  id="CostoH" placeholder="Costo habitacion"  >
                                        <label for="CostoH">Costo habitacion</label><br>
                                    </div>
                                </div>
                            </div>
                            <?php 
  
                            $numero_reserva=$_GET['numero_reserva'];
                            $sql="SELECT * FROM reserva WHERE numero_reserva='$numero_reserva'";
                            $query=mysqli_query($conexion,$sql);
                            $row=mysqli_fetch_array($query);      

                            ?>
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                        <input class="form-control" type="number" name="N_Persona" id="N_Persona" placeholder="N_Persona"  value="<?php echo $row['numero_personas']  ?>"  required pattern="^[0-9]+$" />
                                        <label for="N_Persona">N° Personas</label><br>
                                    </div>
                                </div>
                               
                                    <div class="col">                            
                                        <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                            <input class="form-control" type= "date"name="Fecha_ingreso"  id="Fecha_ingreso" placeholder="Fecha_ingreso" value="<?php echo $row['fecha_ingreso']  ?>" required onchange="calcularnoche();">
                                            <label for="Fecha_ingreso">Fecha ingreso</label><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                        <input class="form-control" name="Fecha_salida" type= "date" id="Fecha_salida" placeholder="Fecha_salida" value="<?php echo $row['fecha_salida']  ?>"   required onchange="calcularnoche();">
                                        <label for="Fecha_salida">Fecha salida</label><br>
                                    </div>
                                    
                                </div>
                            
                              
                                    <div class="col">                            
                                    <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                            <input class="form-control" name="N_Noches" id="N_Noches" placeholder="N_Noches"  value="<?php echo $row['numero_noches']  ?>"  required onchange="calcularnoche();">
                                            <label for="N_Noches"> Noches</label><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                <div class="form-group col-md-6">
                                <div class="col-xs-4  col-md-7 col-lg-8"style="margin: 0 auto;" >
                                <label for="Genero">Servicios adicionales</label>
                                    <select class="form-select" name="serviciosAd" id="serviciosAd" onblur="auto();">
                                    <option selected><?php echo $row['servicios_adicionales']  ?></option>
                                   
                                        <?php
                                        $getServicios2= mostrar('servicios','nombre'); 
                                        while($row = mysqli_fetch_array($getServicios2)){
                                            
                                            $nombre = $row['nombre'];
                                            

                                            ?>
                                            <option value="<?php echo $nombre; ?>"><?php echo $nombre; ?></option>
                                            <?php
                                        } ?>
                                    </select>        
                                                              
                                </div>
                                        
                            </div> 
                                
                            <div class="row">
                                        <div class="col">                            
                                            <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                                    <input class="form-control" name="CServicio" id="CServicio" placeholder="Costos servicios" requiered onclick="totalPagar();">
                                                    <label for="CServicio"> Costo servicios</label><br>
                                            </div>
                                        </div>
                                    
                                
                                    <?php 
    
                                    $numero_reserva=$_GET['numero_reserva'];
                                    $sql="SELECT * FROM reserva WHERE numero_reserva='$numero_reserva'";
                                    $query=mysqli_query($conexion,$sql);
                                    $row=mysqli_fetch_array($query);      

                                ?>
                            
                                
                            </div> 
                            <div class="row">
                                <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                    <input class="form-control"   name="TPagar"  id="TPagar" placeholder="Total a pagar"  value="<?php echo $row['total_pagar']  ?>"  required onclick="totalPagar();">
                                    <label for="TPagar">Total a pagar</label><br>
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
        function calcularnoche(){
            var fechaI = document.getElementById('Fecha_ingreso').value;
            var fechaS = document.getElementById('Fecha_salida').value;
            var diasDeDiferencia = 0;
            var fecha1 = new Date(fechaI);
            var fecha2 = new Date(fechaS);
            
            var diferencia = fecha2.getTime() - fecha1.getTime();
            diasDeDiferencia = diferencia / 1000 / 60 / 60 / 24;
            document.getElementById('N_Noches').value = diasDeDiferencia
             return diasDeDiferencia ;
        }
        function totalPagar(){
           var CostoH = document.getElementById('CostoH').value;
            var CServicio = document.getElementById('CServicio').value;
            var Nnoches = calcularnoche();
              

             /*var CostoH = $("#CostoH").val();
            var CServicio = $("#CServicio").val();
            var Nnoches = calcularnoche();*/ 
            if(CostoH !=='' && CServicio!==''){
                var suma = parseInt(CostoH )+parseInt(CServicio);
                var sumCosHbSer = parseInt(suma)*parseInt(Nnoches);
                document.getElementById('TPagar').value = sumCosHbSer
               
            }
            return console.log(CostoH,CServicio)
        
        }
        function Auto(){
            Nhabitacion = $("#Nhabitacion").val();
            
            var parametros = 
            {
            "buscar": "1",
            "Nhabitacion" : Nhabitacion
            
            };
            $.ajax(
            {
            data:  parametros,
            dataType: 'json',
            url:   '../php/Reg_reserva1.php',
            type:  'post',
            error: function()
            {alert("Error");},
            success:  function (valores){
                $("#CostoH").val(valores.precio);
                
            }
            }) 
            
        }   
        function auto(){
            serviciosAd = $("#serviciosAd").val();
            var parametros = 
            {
            "buscar1": "1",
            "serviciosAd" : serviciosAd
            
            };
            $.ajax(
            {
            data:  parametros,
            dataType: 'json',
            url:   '../php/Reg_reserva1.php',
            type:  'post',
            
            error: function()
            {alert("Error");},
            success:  function (valores){
                $("#CServicio").val(valores.precio);
                
            }
            })
            
        }      
    </script>
    </script>
</body>
</html>