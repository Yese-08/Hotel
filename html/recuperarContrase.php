<?php
	include "../php/conexion.php";
    $email= $_GET['email'] ;
    $query= "SELECT * FROM cliente where email='$email'";
	$_consulta= mysqli_query($conexion,$query);
    while($Date=mysqli_fetch_assoc($_consulta)){
        $pregunta = $Date['pregunta'];
        $respuesta = $Date['respuesta'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Recuperar contraseña</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <script src="../js/popper.min.js" ></script>
      <script src="../js/bootstrap.bundle.min.js"></script>
      <link rel="shortcut icon" href="../assets/img/log1.png" type="image/x-icon">
</head>
<body style="background-image: url(../assets/img/fondo1.jpg); background-repeat: no-repeat;  background-size: cover; ">
    <!--hhh-->    
    <nav class=" navbar bg-dark navbar-expand-lg " data-bs-theme="dark" >
        <div class="container-fluid">
            <p>
                <img src="../assets/img/icon1.png" alt="img-icon1" style="padding: -50px; ">
                <a class="navbar-brand" href="#">HOTEL MAR AZUL</a>
            </p>
        </div>
        </div>
    </nav>
    <!--hhh-->

    <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
            <form action="../php/buscarContra.php" method="get">
            <h1 style="text-align: righ; font-family: cursive">Para poder restalecer su contraseña, responda esta pregunta de seguridad</h1><br>
            <h1 style="text-align: center; font-family: cursive"> <?php echo '<p style="text-align: righ; font-family: cursive">'.$pregunta.'</p>';?> </h1>
            
            <input type="hidden" value='<?php $respuesta ?>'  name='respuesta2'>
              <div class="form-outline form-white mb-4">
              <input class="form-control" name="respuesta"  id="respuesta" type="text" >
                
              </div>             
              <button type="submit" class="btn btn-primary btn-block mb-4" value="Actualizar"> Enviar respuesta</button>    
            
            </div>
            </form>
            <div>
              
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


</body>
</html>