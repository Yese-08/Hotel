<?php 
    include 'conexion.php';
    $numero_hab=$_GET['numero_hab'];
    $sql="SELECT * FROM habitacion WHERE numero_hab='$numero_hab'";
    $query=mysqli_query($conexion,$sql);
    $row=mysqli_fetch_array($query);      

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Actualizar habitación</title>

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
            <h2 class="fw-bold mb-5">Actualizar habitación</h2>
            <form action="update.php" method="POST">
              <!-- numero habitacion -->
              
                <div class="col-md-6 mb-4">
                  <div class="form-floating mb-">
                    <input disabled type="text"   class="form-control" name="habitacion" placeholder="N° Habitacion" value="<?php echo $row['numero_hab']  ?>" required />
                    <label class="form-label" for="habitacion">N° Habitacion</label>
                  </div>
                </div>
                

              <!-- categoria -->
              <div class="col-md-6 mb-4">
                  <div class="form-floating mb-">
                  <input type="hidden"  class="form-control" name="habitacion" placeholder="N° Habitacion" value="<?php echo $row['numero_hab']  ?>" required>
                  <select class="form-select" aria-label="Default select example" name="Categoria" id="Categoria" require_once>
                      <option value="<?php echo $row['categoria']  ?>"><?php echo $row['categoria']  ?></option>
                      <option value="Simple" >Simple</option>
                      <option value="Doble">Doble</option>
                      <option value="Suite">Suite</option>
                    </select>
                    <label class="form-label" for="Categoria">Categoria</label>
                  </div>
                </div>
                
              <!-- Detalles input -->
              <div class="col-md-6 mb-4">
                  <div class="form-floating mb-">
                    <input type="text"  class="form-control" id="Detalles" name="Detalles" placeholder="Detalles" value="<?php echo $row['detalles']  ?>" required/>
                    <label class="form-label" for="Detalles">Detalles</label>
                  </div>
                </div>
                

              <!--                     <label class="form-label" for="Precio">Precio</label>
 -->
              <div class="col-md-6 mb-4">
                  <div class="form-floating mb-">
                    <input type="text"  class="form-control"  id="Precio" name="Precio" placeholder="Precio" value="<?php echo $row['precio']  ?>" required/>
                    <label class="form-label" for="Precio">Precio</label>
                  </div>
                </div>
                

              <!-- Submit Actualizar -->
              <button type="submit" class="btn btn-primary " value="Actualizar"> Actualizar</button>

              <!--  no se puede quitar -->
              <div class="text-center"></div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="../assets/img/hab4.png" class="w-100 rounded-4 shadow-4"  height="550" alt="" />
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
</body>
</html>