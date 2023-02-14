<?php 
    include 'conexion.php';
    include '../php/conexion.php';

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
    <div class="container mt-5">
            <form action="update.php" method="POST">
                <h1>Actualizar habitacion</h1>
                <br><br>
                
                <div class="form-floating mb-3">
            
                <input type="" class="form-control" name="habitacion" id="habitacion" placeholder="N° Habitacion"  value="<?php echo $row['numero_hab']  ?>" disabled>
                <label for="habitacion">Número de habitación</label>
                </div>
                <input type="header" class="form-control" name="habitacion" placeholder="N° Habitacion" value="<?php echo $row['numero_hab']  ?>">                                          
                <input type="text" class="form-control" name="Categoria" placeholder="Categoria" value="<?php echo $row['categoria']  ?>">
                <input type="text" class="form-control" name="Detalles" placeholder="Detalles" value="<?php echo $row['detalles']  ?>">
                <input type="text" class="form-control" name="Precio" placeholder="Precio" value="<?php echo $row['precio']  ?>">
                                
                                
                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
            </form>
                    
      </div>

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
            <h2 class="fw-bold mb-5">Actualizar</h2>
            <form action="update.php" method="POST">
              <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="form-floating mb-3">
                      <input type="text"  class="form-control" name="habitacion" placeholder="N° Habitacion" value="<?php echo $row['numero_hab']  ?>">
                      <label for="habitacion">"N° Habitacion"</label>
                  <br>
                  <select class="form-select" aria-label="Default select example" name="Categoria" id="Categoria">
                      <option value="<?php echo $row['categoria']  ?>"><?php echo $row['categoria']  ?></option>
                      <option value="T.I" >T.I</option>
                      <option value="C.C">C.C</option>
                      <option value="C.E">C.E</option>
                    </select>
                  <br>
                  <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="Detalles" placeholder="Detalles" value="<?php echo $row['detalles']  ?>">
                      <label for="Detalles">Detalles</label>
                  </div>
                  <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="Precio" placeholder="Precio" value="<?php echo $row['precio']  ?>">
                      <label for="Detalles">Precio</label>
                  </div>
                  <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4" value="Actualizar"> Actualizar</button>
              <br>
              
            </form>
          </div>
        </div>
      </div>

    <div class="col-lg-6 mb-5 mb-lg-0">
      <img src="../assets/img/fon11.png" class="w-100 rounded-4 shadow-4" height="1050"
          alt="" />
    </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>

      
    </body>
</html>