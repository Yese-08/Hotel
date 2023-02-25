<?php
include '../php/function_validarSesion.php';
include "../php/conexion.php";

$user = $_SESSION['ide'];
$query= "SELECT nombre, tipo_documento, numero_documento, fecha_nacimiento, nacionalidad, telefono, email, genero FROM cliente where numero_documento='$user'";
$_consulta= mysqli_query($conexion,$query);
while($Date=mysqli_fetch_assoc($_consulta)){
    $nombre = $Date['nombre'];
    $T_Documento = $Date['tipo_documento'];
    $n_Documento = $Date['numero_documento'];
    $fecha = $Date['fecha_nacimiento'];
    $nacionalidad = $Date['nacionalidad'];
    $telefono = $Date['telefono'];
    $email = $Date['email'];
    $genero = $Date['genero'];
   
}

?>
<!DOCTYPE html>
<?php
  if($_SESSION['user']== 'usuario'){?>
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
<br><br><br>
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
                                            <input class="form-control" name="NomApe" id="NomApe" name="NomApe" value= "<?php echo $nombre?>" required/>
                                            <label for="NomApe">Nombre y apellido</label><br>
                                        </div>
                                        </div>
                                        <div class="col">                            
                                            <div class="col-xs-4  col-md-7 col-lg-8" style="margin: 0 auto;" >
                                                <br><select class="form-select" aria-label="Default select example" name="Nhabitacion" id="Nhabitacion">
                                                <option selected>Número de habitación</option>
                                                <?php
                                                    include "../php/buscar.php";
                                                    $getServicios2= mostrar('habitacion','numero_hab');

                                                
                                                    while($row = mysqli_fetch_array($getServicios2)){
                                                        $numero_hab = $row['numero_hab'];
                                                        $categoria = $row['categoria'];
                                                        $detalles = $row['detalles'];
                                                        $precio = $row['precio'];

                                                        ?>
                                                        <option value="<?php echo $numero_hab; ?>"><?php echo $numero_hab; ?></option>
                                                        <?php
                                                  }

                                                ?>
                                                </select> <br>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="row">
                                        <div class="col">
                                        <div class="col-xs-4  col-md-7 col-lg-8" style="margin: 0 auto;">
                                        <div class="form-outline mb-4 text-lg-start">
                                        <label for="TipoDoc">Tipo de documento</label>
                                        <br><select class="form-select" aria-label="Default select example" name="Tdocumento" id="Tdocumento">
                                        <option selected><?php echo $T_Documento; ?></option>
                                            <option value="T.I" >T.I</option>
                                            <option value="C.C">C.C</option>
                                            <option value="C.E">C.E</option>
                                            </select>
                                                </div>
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
                                            <input class="form-control" name="NDocum" id="NDocum" type= "number" value= <?php echo $n_Documento?> required/>
                                            <label for="NDocum">Numero de documento</label><br>
                                        </div>                       
                                        </div>        
                                        <div class="col">                            
                                            <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                                <input class="form-control" name="Nperso"  id="Nperso" type= "number" placeholder="N° de Personas" required>
                                                <label for="NPerso">N° de Personas</label><br>
                                            </div>
                                        </div>
                                    </div>             
                                    <div class="row">
                                        <div class="col">
                                          <div  class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">                                            
                                            <input class="form-control" name="FNacimiento" id="FNacimiento" type="date" value= <?php echo $fecha?> required/>
                                            <label>Fecha de nacimiento</label>
                                        </div>
                                        </div>
                                        <div class="col">                        
                                            <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">                                                
                                                <input class="form-control" name="FIngreso"  id="FIngreso" type="date" placeholder="Fecha ingreso" required onchange="calcularnoche();">
                                                <label for="Telefono">Fecha de ingreso</label><br></div>
                                            </div>
                                        </div>
                                    <div class="row">
                                        <div class="col">   
                                          <br>                         
                                          <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                            <input class="form-control" name="nacionalidad" id="nacionalidad" value= <?php echo $nacionalidad?> required/>
                                            <label for="NDocum">Nacionalidad</label><br>
                                        </div>     
                                        </div>
                                        <div class="col">                         
                                            <div  class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">                                                
                                                <input class="form-control" name="FSalida"  id="FSalida" type="date" placeholder="Fecha salida" required onchange="calcularnoche();">
                                                <label>Fecha salida</label><br>
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
                                                <input class="form-control" name="NNoches"  id="NNoches" placeholder="N° de noches" required onchange="calcularnoche();" >
                                                <label for="NNoches">N° de noches</label><br>
                                            </div>
                                        </div>
                                    </div>                    
                                    <div class="row">
                                        <div class="col">
                                          <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                            <input class="form-control" name="Email" id="Email" value= <?php echo $email?> required required/>
                                            <label for="Email">Email</label><br>
                                        </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="col-xs-4  col-md-7 col-lg-8"style="margin: 0 auto;" >
                                            <select class="form-select" name="serviciosAd" id="serviciosAd" >
                                            <option selected>Servicios adicionales</option>
                                                <?php
                                                    $getServicios2= mostrar('servicios','nombre');                                                
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
                                            <div class="col-xs-4  col-md-7 col-lg-8" style="margin: 0 auto;">
                                            <div class="form-outline mb-4 text-lg-start">
                                                <label for="Genero">Genero</label>
                                                <br><select class="form-select" aria-label="Default select example" name="Tdocumento" id="Tdocumento">
                                                <option selected><?php echo $genero; ?></option>
                                                <option value="Masculino" >Masculino</option>
                                                <option value="Femenino">Femenino</option>
                                                <option value="Otro">Otro</option>
                                                </select>
                                            </div>
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
            var Nnoches = calcularnoche();
           

            if(CostoH !=='' && CServicio!==''){
                var suma = parseInt(CostoH )+parseInt(CServicio);
                var sumCosHbSer = parseInt(suma)*parseInt(Nnoches);
                document.getElementById('TPagar').value = sumCosHbSer
                return console.log(suma,sumCosHbSer,Nnoches)
            }
        
        }

        function calcularnoche(){
            var fechaI = document.getElementById('FIngreso').value;
            var fechaS = document.getElementById('FSalida').value;
            var fecha1 = new Date(fechaI);
            var fecha2 = new Date(fechaS);
            
            var diferencia = fecha2.getTime() - fecha1.getTime();
            var diasDeDiferencia = diferencia / 1000 / 60 / 60 / 24;
            document.getElementById('NNoches').value = diasDeDiferencia
        
            return diasDeDiferencia ;
            
            
        }
    </script>
</body>
</html>
<?php
}else{echo 'usuario no tiene acceso';}?>