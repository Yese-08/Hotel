<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Registrarse</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="shortcut icon" href="../assets/img/log1.png" type="image/x-icon">
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
/*session_start();
if(isset($_SESSION['fallo_login'])){
  echo $_SESSION['fallo_login'];
}*/
if(isset($_REQUEST['seRegistro'])){?>
   <script>
      Swal.fire({
        title: '<strong>Se registró exitosamente</strong>'+
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
          
          window.location.href = "http://localhost/proyecto/html/Login.php";
        } else if (result.isDenied) {
          Swal.fire('Changes are not saved', '', 'info')}})
    </script>
<?php }

?>
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
            <h2 class="fw-bold mb-5">Registrarse</h2>
            <form action="../php/Reg_Cliente.php" method="post">
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <input type="hidden" name="T_usuario" value="usuario">
                  <div class="form-floating mb-3">
                      <input type="text"  class="form-control" name="NomApe"  id="NomApe" placeholder="Nombre y apellido" required autocomplete="off">
                      <label for="NomApe">Nombre y apellido</label>
                  <br>
                  <select class="form-select" aria-label="Default select example" name="TipoDoc" requiered id="TipoDoc">
                      <option value="">Tipo de documento</option>
                      <option value="T.I" >T.I</option>
                      <option value="C.C">C.C</option>
                      <option value="C.E">C.E</option>
                    </select>
                  <br>
                  <div class="form-floating mb-3">
                      <input type="text" class="form-control"  id="NDocum" name="NDocum" placeholder="Numero de documento" required autocomplete="off">
                      <label for="NDocum">Numero de documento</label>
                  </div>
                  
                  <div class="form-outline mb-4 text-lg-start">
                    <label for="fechaIngreso">Ingrese fecha de nacimiento</label>
                    <input type="date" requiered id="fechaNac" name ="fechaNac" class="form-control form-control-lg" placeholder="Fecha de ingreso" />
                  </div>
                  
                  <select class="form-select" aria-label="Default select example" requiered id="Nacionalidad" name="Nacionalidad" >
                    <option value="">Procedencia</option>
                    <option value="Colombia" >Colombia</option>
                    <option value="Perú">Perú</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Brasil">Brasil</option>
                    </select>
                  <br>
                  <div class="form-floating mb-3" >
                      <input type="text" class="form-control"  id="numPer" name="numPer" placeholder="Telefono" required autocomplete="off">
                      <label for="numPer">Telefono</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="email"  class="form-control form-control-lg"  id="Email" name="Email" placeholder="Email" required autocomplete="off" />
                    
                  </div>
                  <select class="form-select" aria-label="Default select example" name="Genero" requiered id="Genero">
                    <option value="">Genero</option>
                    <option value="Masculino" >Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Otro">Otro</option>
                    </select>
                  <br>
                  <h6>Seleccione una pregunta de seguridad en caso de olvidar su contraseña: </h6>
                  <select class="form-select" aria-label="Default select example" name="pregunta" requiered id="pregunta">
                    <option value="">Pregunta</option>
                    <option value="Nombre de tu primera mascota" >Nombre de tu primera mascota</option>
                    <option value="Nombre de la persona que más quieres">Nombre de la persona que más quieres</option>
                    <option value="Juguete deseado y no obtenido">Juguete deseado y no obtenido</option>
                    <option value="Puedes poner algo u alguien que no olvides">Puedes poner algo u alguien que no olvides</option>
                    </select>
                  <br>
                  <div class="form-floating mb-3" >
                    <input type="text" class="form-control" requiered id="respuesta" name="respuesta" placeholder="Respuesta" autocomplete="off">
                    <label for="respuesta">Respuesta</label>
                    
                
                </div>
                  <div class="form-floating mb-3" >
                    <input type="text" class="form-control" requiered id="Usuario" name="Usuario" placeholder="Usuario" autocomplete="off">
                    <label for="Usuario">Usuario</label>
                    
                
                </div>
                 
                  <div class="form-outline mb-4">
                    <input type="password" requiered id="contraseña"  name="contraseña" class="form-control form-control-lg" placeholder="contraseña" autocomplete="off"/>
                  </div>
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary" >
                Registrarse
              </button>
              <br>
              <div class="pt-1 mb-4">
                <a href="Login.html" style="text-align: center;">¿Ya tiene una cuenta?</a>
              </div>

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