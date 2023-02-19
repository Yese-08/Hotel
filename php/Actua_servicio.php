<?php 
    include 'conexion.php';
    session_start();
    $codigo=$_GET['cod'];
    $sql="SELECT * FROM servicios WHERE cod='$codigo'";
    $query=mysqli_query($conexion,$sql);
    $row=mysqli_fetch_array($query);      

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Actualizar servicio</title>

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
            
            <h2 class="fw-bold mb-5">Actualizar servicio</h2>
            <form action="updateServicio.php" method="POST">
              <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="form-floating mb-3">
                      <input type="header"  class="form-control" name="codigo" placeholder="Codigo servicio" value="<?php echo $row['cod']  ?>" disabled>
                      <label for="habitacion">"Codigo servicio"</label>
                  <br>
                  <input type="hidden"  class="form-control" name="codigo" placeholder="N° Habitacion" value="<?php echo $row['cod']  ?>">

                  
                  <br>
                  <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
                      <label for="Nombre">Nombre</label>
                  </div>
                  <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="precio" placeholder="precio" value="<?php echo $row['precio']  ?>">
                      <label for="Detalles">Precio</label>
                  </div>

                    
                    <br>
                  <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4" value="Actualizar"> Actualizar</button>
              <br>
              
            </form>
            
          </div>
          
        </div>
        
      </div>

      
    </div>
    <div class="col-lg-6 mb-5 mb-lg-0">
              <img src="../assets/img/servicios.jpg" class="w-800 rounded-4 shadow-4" height = "700" width = "800"
              alt="" />
      </div>

  </div>
  <!-- Jumbotron -->
</section>

      
    </body>
</html>