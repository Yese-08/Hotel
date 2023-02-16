<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Reserva_Cliente</title>

    <!-- Lineas importantes-->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/popper.min.js" ></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="../assets/img/log1.png" type="image/x-icon">
</head>
<body >
<!---MENÚ PRINCIPAL-->
    <script src="../js/menu3.js"></script>    
<!--FIN MENÚ PRINCIPAL-->    
    <!-- Section: Design Block -->
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
                    <h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Reserva de habitación</h1><br>
                      
                        <div class="panel panel-primary" >               
                            
                            <div class="panel-body" >            
                                <form action="../php/Reg_Reserva.php" method="post">
            
                                    <div class="row" >
                                        <div class="col">
                                          <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                            <input class="form-control" name="NomApe" id="NomApe" placeholder="Nombre y apellido" name="NomApe" required/>
                                            <label for="NomApe">Nombre y apellido</label><br>
                                        </div>
                                        </div>
                                        <div class="col">                            
                                            <div class="col-xs-4  col-md-7 col-lg-8" style="margin: 0 auto;" >
                                                <br><select class="form-select" aria-label="Default select example" name="Nhabitacion" id="Nhabitacion">
                                                <option selected>Número de habitación</option>
                                                <?php
                                                    include("../php/conexion.php");
                                                    $getServicios1 = "SELECT * FROM habitacion order by categoria";
                                                    $getServicios2 = mysqli_query($conexion,$getServicios1);
                                                
                                                    while($row = mysqli_fetch_array($getServicios2)){
                                                        $numero_hab = $row['numero_hab'];
                                                        $categoria = $row['categoria'];
                                                        $detalles = $row['detalles'];
                                                        $precio = $row['precio'];

                                                        ?>
                                                        <option value="<?php echo $categoria; ?>"><?php echo $categoria; ?></option>
                                                        <?php
                                                  }

                                                ?>
                                                </select> <br>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="row">
                                        <div class="col">
                                          <div class="col-xs-4  col-md-7 col-lg-8"style="margin: 0 auto;"  >
                                            <select class="form-select" aria-label="Default select example" name="Tdocumento" id ="Tdocumento"required>
                                                <option selected>Tipo documento</option>
                                                <option value="C.C">C.C</option>
                                                <option value="T.I">T.I</option>
                                                <option value="C.E">C.E</option>
                                            </select>
                                        </div>     
                                        </div>
                                        <div class="col">                            
                                            <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                                <input class="form-control" name="CostoH"  id="CostoH" placeholder="Costo habitación" required onchange="totalPagar();">
                                                <label for="CostoH">Costo habitación</label><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">                       
                                        <div class="col">
                                          <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                            <input class="form-control" name="NDocum" id="NDocum" placeholder="Numero de documento" required/>
                                            <label for="NDocum">Numero de documento</label><br>
                                        </div>                       
                                        </div>        
                                        <div class="col">                            
                                            <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                                <input class="form-control" name="Nperso"  id="Nperso" placeholder="N° de Personas" required>
                                                <label for="NPerso">N° de Personas</label><br>
                                            </div>
                                        </div>
                                    </div>             
                                    <div class="row">
                                        <div class="col">
                                          <div class="col-md-8" style="margin: 0 auto; text-align: justify;">
                                            <label>Fecha de nacimiento</label>
                                            <input class="form-control" name="FNacimiento" id="FNacimiento" type="date" placeholder="Fecha de nacimiento" required/>
                                        </div>
                                        </div>
                                        <div class="col">                        
                                            <div class="col-md-7 col-lg-8" style="margin: 0 auto; text-align: justify;">
                                                <label>Fecha de ingreso</label>
                                                <input class="form-control" name="FIngreso"  id="FIngreso" type="datetime-local" placeholder="Fecha ingreso" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">   
                                          <br>                         
                                          <div class="col-xs-4  col-md-7 col-lg-8"style="margin: 0 auto;"  >
                                            <select class="form-select" aria-label="Default select example" name ="nacionalidad" id="nacionalidad">
                                                <option selected>Procedencia</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Brasil">Brasil </option>
                                            </select>
                                        </div>    
                                        </div>
                                        <div class="col">                         
                                            <div class="col-md-7 col-lg-8" style="margin: 0 auto; text-align: justify;">
                                                <label>Fecha salida</label>
                                                <br><input class="form-control" name="FSalida"  id="FSalida" type="datetime-local" placeholder="Fecha salida" required><br>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="row">
                                        <div class="col">
                                          <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                            <input class="form-control" name="Telefono" id="Telefono" placeholder="Telefono" required/>
                                            <label for="Telefono">Telefono</label><br>
                                        </div>                
                                        </div>    
                                        <div class="col">                            
                                            <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                                <input class="form-control" name="NNoches"  id="NNoches" placeholder="N° de noches" required onchange="totalPagar();">
                                                <label for="NNoches">N° de noches</label><br>
                                            </div>
                                        </div>
                                    </div>                    
                                    <div class="row">
                                        <div class="col">
                                          <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                            <input class="form-control" name="Email" id="Email" placeholder="Email" required/>
                                            <label for="Email">Email</label><br>
                                        </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="col-xs-4  col-md-7 col-lg-8"style="margin: 0 auto;" >
                                            <select class="form-select" name="serviciosAd" id="serviciosAd">
                                            <option selected>Servicios adicionales</option>
                                                <?php
                                                    include("../php/conexion.php");
                                                    $getServicios1 = "SELECT * FROM servicios order by nombre";
                                                    $getServicios2 = mysqli_query($conexion,$getServicios1);
                                                
                                                    while($row = mysqli_fetch_array($getServicios2)){
                                                        $cod = $row['cod'];
                                                        $nombre = $row['nombre'];
                                                        $precio = $row['precio'];

                                                        ?>
                                                        <option value="<?php echo $nombre; ?>"><?php echo $nombre; ?></option>
                                                        <?php
                                                  }

                                                ?>
                                                
                                            </select>                                  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                          <div class="col-xs-4  col-md-7 col-lg-8"style="margin: 0 auto;"  >
                                            <select class="form-select" aria-label="Default select example" name="genero" id="genero">
                                                <option selected>Genero</option>
                                                <option value="Femenino">Femenino</option>
                                                <option value="Masculino">Masculino</option>
                                                <option value="otro">otro</option>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col">                            
                                            <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                                <input class="form-control" name="CServicio"  id="CServicio"  placeholder="Costo de servicio" required onchange="totalPagar();">
                                                <label for="CServicio">Costo de servicio</label><br>
                                            </div>
                                        </div>
                                    </div>               
                                    <div class="row">
                                        <div class="col">
                                            
                                        </div>                        
                                        <div class="col"  >
                                            <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                                <input class="form-control"   name="TPagar"  id="TPagar" placeholder="Total a pagar" required onchange="totalPagar();">
                                                <label for="TPagar">Total a pagar</label><br>
                                            </div>                            
                                        </div>
                                        
                                    </div>
                                   
                                    <div class="container text-center">
                                        <div class="row">                          
                                        <div class="col align-self-center">
                                            <button type="submit" class="btn btn-primary">
                                                Generar reporte
                                            </button>
                                
                                        </div>                          
                                        </div>
                                    </div>   
                                    
                                </form>
                            
                            </div>
                        </div>
                   
                </div>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="../assets/img/fondo21.png" class="w-100 rounded-4 shadow-4"alt="" />
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->

    <script>
        // si la respuesta que se espera es sumar
        function totalPagar(){
            var CostoH = document.getElementById('CostoH').value;
            var CServicio = document.getElementById('CServicio').value;
            var Nnoches = document.getElementById('NNoches').value;

            if(CostoH !=='' && CServicio!==''){
                var suma = parseInt(CostoH )+parseInt(CServicio);
                var sumCosHbSer = parseInt(suma)*parseInt(Nnoches);
                document.getElementById('TPagar').value = sumCosHbSer;
            }
        
        } 
    </script>
</body>
</html>