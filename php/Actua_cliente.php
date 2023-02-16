<?php 
    include 'conexion.php';
    include '../php/conexion.php';
    session_start();

    $numero_documento=$_GET['numero_documento'];

    $sql="SELECT * FROM cliente WHERE numero_documento='$numero_documento'";
    $query=mysqli_query($conexion,$sql);
    $row=mysqli_fetch_array($query);      

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Actualizar cliente</title>

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

       <!-- Section: Design Block -->
<section class="text-center text-lg-start">
  
  <!-- Jumbotron -->
  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-5 text-center">
            
            <h2 class="fw-bold mb-5">Actualizar cliente</h2>
            <form action="updateCliente.php" method="POST">
              <!-- 2 column grid layout with text inputs for the first and last names -->
                  
                  <br>
                  <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="NomApe" placeholder="Nombre y Apellido" value="<?php echo $row['nombre']  ?>">
                      <label for="NomApe">Nombre y apellidos</label>
                  </div>

                  <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="TipoDoc" placeholder="Tipo de documento" value="<?php echo $row['tipo_documento']  ?>" disabled>
                      <label for="TipoDoc">Tipo de documento</label>
                      <input type="hidden" class="form-control" name="TipoDoc" placeholder="Tipo de documento" value="<?php echo $row['tipo_documento']  ?>">
                    </div>
                  

                  <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="NDocum" placeholder="Numero de documento" value="<?php echo $row['numero_documento']  ?>" disabled>
                      <label for="NDocum">Numero de documento</label>
                      <input type="hidden" class="form-control" name="NDocum" placeholder="Numero de documento" value="<?php echo $row['numero_documento']  ?>">
                    </div>
                  

                  <div class="form-outline mb-4 text-lg-start">
                    <label for="fechaIngreso">Fecha de nacimiento</label>
                    <input type="date" id="fechaIngreso" name ="fechaNac" class="form-control form-control-lg" placeholder="Fecha de nacimiento" value="<?php echo $row['fecha_nacimiento']  ?>"/>
                  </div>
                  <div class="form-outline mb-4 text-lg-start">
                  <label for="nacionalidad" >Procedencia</label>
                  <select class="form-select" aria-label="Default select example" id="Nacionalidad" name="Nacionalidad">
                    
                    <option value="<?php echo $row['nacionalidad']  ?>"><?php echo $row['nacionalidad']  ?></option>
                    <option value="Colombiana" >Colombia</option>
                    <option value="Peruana">Perú</option>
                    <option value="Venezolana">Venezuela</option>
                    <option value="Brasileña">Brasil</option>
                    </select>
                    
                    </div>
                  <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="numPer" placeholder="Telefono" value="<?php echo $row['telefono']  ?>">
                      <label for="Detalles">Telefono</label>
                  </div>

                  <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="Email" placeholder="Email" value="<?php echo $row['email']  ?>">
                      <label for="Detalles">Email</label>
                  </div>

                  <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="Genero" placeholder="Genero" value="<?php echo $row['genero']  ?>">
                      <label for="Genero">Genero</label>
                  </div>

                


                  <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4" value="Actualizar"> Actualizar</button>
              <br>
              
            </form>
            
          </div>
          
        </div>
        
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
              <img src="../assets/img/Actuacliente.jpg" class="w-800 rounded-4 shadow-4" height = "800" width = "900"
              alt="" />
      </div>
    </div>
    

  </div>
  <!-- Jumbotron -->
</section>

      
    </body>
</html>