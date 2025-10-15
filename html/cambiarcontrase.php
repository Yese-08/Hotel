
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Restablecer contraseña</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="../assets/img/log1.png" type="image/x-icon">
    <script src="../js/popper.min.js" ></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
<?php
/*session_start();
if(isset($_SESSION['fallo_login'])){
  echo $_SESSION['fallo_login'];
}*/
if(isset($_REQUEST['noCoincide'])){?>
    <div class="alert alert-warning alert-dismissible fade show " role="alert" style="color: red;position: absolute;
  top: 50%;
  left: 75%; transform: translate(10%, -50%);">

  <strong>¡Las contraseñas no coiciden!</strong> Por favor verificar.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php }
if(isset($_REQUEST['seActualizo'])){?>
  <script>
     Swal.fire({
       title: '<strong>Se actualizó correctamente</strong>'+
       "<br><img src='https://www.cajacopi.com/Content/Imagenes/Pagina/iconocheck.png' with='500' height='250' >",
       icon: 'check',
       html:"<h4>¿Desea iniciar sesion?</h4>",
       showCloseButton: true,
       showCancelButton: true,  
       confirmButtonText: 'Si',
       cancelButtonText:'Cancelar',
       cancelButtonAriaLabel:'Thumbs down'})
       .then((result) => {
       //Read more about isConfirmed, isDenied below 
       if (result.isConfirmed) {
         
         window.location.href = "../html/Login.php";
       } else if (result.isDenied) {
         Swal.fire('Changes are not saved', '', 'info')}})
   </script>

   <?php }

?>
    
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://us.123rf.com/450wm/lumaxart2d/lumaxart2d0904/lumaxart2d090401501/4759212-celebraci%C3%B3n-de-la-llave-de-oro.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
                <form id="form" class="form-horizontal" role="form" action="../php/cambiarcontra.php" method="get">
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">HOTEL MAR AZUL</span>
                  </div>
                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Ingrese su nueva contraseña</h5>
                  <div class="form-outline mb-4">
                    <input type="password" id="respuesta1" class="form-control form-control-lg" name='respuesta1' required/>                  
                  </div>
                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Reescriba su nueva contraseña</h5>
                  <div class="form-outline mb-4">
                    <input type="password" id="respuesta2" class="form-control form-control-lg" name='respuesta2' required/>
                  </div>
                  <div class="pt-1 mb-4">
                    <input type="hidden" name='email' value= <?php echo $_GET['emailC']?>>
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Restablecer</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>