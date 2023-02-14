<?php 
    include 'conexion.php';
    include '../php/conexion.php';

    $numero_documento=$_GET['numero_documento'];

    $sql="SELECT * FROM cliente WHERE numero_documento='$numero_documento'";
    $query=mysqli_query($conexion,$sql);
    $row=mysqli_fetch_array($query);      

?>

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
            <form action="update.php" method="POST">

            <!--$NomApe= $_POST['NomApe']; PREGUNTAR SI EL NUMERO DE DOCUMENTO Y TIPO TRAMBIEN SE EDITA
	$TipoDoc =$_POST['TipoDoc'];
	$NDocum =$_POST['NDocum'];
    $fechaIngreso =$_POST['fechaIngreso'];
	$Nacionalidad =$_POST['Nacionalidad'];
	$numPer =$_POST['numPer'];
	$Email =$_POST['Email'];
	$Genero =$_POST['Genero'];
	$Usuario =$_POST['Usuario'];
	$contraseña =$_POST['contraseña'];
               2 column grid layout with text inputs for the first and last names -->
                  <div class="form-floating mb-3">
                      <input type="header"  class="form-control" name="NomApe" placeholder="Nombre y apellido" value="<?php echo $row['nombre']  ?>">
                      <label for="NomApe">"N° Habitacion"</label>
                  <br>
                  
                  <br>
                  <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="fecha_nacimiento" placeholder="Fecha de nacimiento" value="<?php echo $row['fecha_nacimiento']  ?>">
                      <label for="Fecha de nacimiento">Fecha de nacimiento</label>
                  </div>
                  <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="nacionalidad" placeholder="Nacionalidad" value="<?php echo $row['nacionalidad']  ?>">
                      <label for="Nacinalidad">Nacionalidad</label>
                  </div>
                  <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4" value="Actualizar"> Actualizar</button>
              <br>
              
            </form>
            
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0">
              <img src="../assets/img/cama.jpg" class="w-300 rounded-4 shadow-4" height="500"
              alt="" />
           </div>
        </div>
        
      </div>

    
    </div>
  </div>
  <!-- Jumbotron -->
</section>

      
    </body>
</html>