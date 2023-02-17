<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva Recepcionista</title>
    
    <!-- Lineas importantes-->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/popper.min.js" ></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="../assets/img/log1.png" type="image/x-icon">
    <!---MENÚ PRINCIPAL-->
    <script src="../js/menu.js"></script>    
    <!--FIN MENÚ PRINCIPAL-->  
       
</head>
<body style="background-image: url(../assets/img/fondo1.jpg); background-repeat: no-repeat;  background-size: cover; ">
    <div class="container" >
        <br><br><br><br><br>
        <h1 style="font-family: cursive">Reserva de habitación</h1><br>
          
            <div class="panel panel-primary" >               
                
                <div class="panel-body" >            
                    <form action="../php/Reg_Reserva.php" method="post">

                        <div class="row" >
                            <div class="col">
                                
                            </div>
                            <div class="col">                            
                                <div class="col-xs-4  col-md-7 col-lg-8" style="margin: 0 auto;">
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
                                <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                    <input class="form-control" name="NomApe" id="NomApe" placeholder="Nombre y apellido" name="NomApe" required/>
                                    <label for="NomApe">Nombre y apellido</label><br>
                                </div>
                            </div>
                            <div class="col">                            
                                <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                    <input class="form-control" name="CostoH"  id="CostoH" placeholder="Costo habitación" value=<?php echo $precio; ?> required  onchange="totalPagar();">
                                    <label for="CostoH">Costo habitación</label><br>
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
                                    <input class="form-control" name="Nperso"  id="Nperso" placeholder="N° de Personas" required>
                                    <label for="NPerso">N° de Personas</label><br>
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
                                <div class="col-md-7 col-lg-8" style="margin: 0 auto;">
                                    <label>Fecha de ingreso</label>
                                    <input class="form-control" name="FIngreso"  id="FIngreso" type="date" placeholder="Fecha ingreso" required onchange="calcularnoche();">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">                            
                                <div class="col-md-8" style="margin: 0 auto;">
                                    <label>Fecha de nacimiento</label>
                                    <input class="form-control" name="FNacimiento" id="FNacimiento" type="date" placeholder="Fecha de nacimiento" required/>
                                </div>
                            </div>
                            <div class="col">                         
                                <div class="col-md-7 col-lg-8" style="margin: 0 auto;">
                                    <label>Fecha salida</label>
                                    <br><input class="form-control" name="FSalida"  id="FSalida" type="date" placeholder="Fecha salida" required onchange="calcularnoche();"><br>
                                </div>
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col">
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
                                <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                    <input class="form-control" name="NNoches"  id="NNoches" placeholder="N° de noches" required onchange="calcularnoche()  onmousedown=totalPagar();">
                                    <label for="NNoches">N° de noches</label><br>
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
                            <div class="form-group col-md-6">
                                <div class="col-xs-4  col-md-7 col-lg-8"style="margin: 0 auto;" >
                                    <select class="form-select" name="serviciosAd" id="serviciosAd" onchange="autoservicio();" >
                                    <option selected>Servicios adicionales</option>
                                        <?php
                                        $getServicios2= mostrar('servicios','nombre');
                                        while($row = mysqli_fetch_array($getServicios2)){
                                            $nombre = $row['nombre'];
                                            ?>
                                            <option value="<?php echo $nombre; ?>"><?php echo $nombre; ?></option>
                                            <?php

                                        }?>   
                                    </select>           
                                                       
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
                            <div class="col">        
                                                    
                                <div class="form-floating col-md-7 col-lg-8" style="margin: 0 auto;">
                                    <input class="form-control" name="CServicio"  id="CServicio"  placeholder="Costo de servicio" value= <?php echo $precio; ?>  required  onchange="totalPagar();">
                                    <label for="CServicio">Costo de servicio</label><br>
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