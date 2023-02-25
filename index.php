<!DOCTYPE html>
<html>
<head>
    <!--Acordion-->
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Hotel mar azul</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" href="assets/img/log1.png" type="image/x-icon">
</head>
<body>
    
    <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
          <img src="assets/img/icon1.png" alt="img-icon1" style="padding: -50px; ">
          
          <a class="navbar-brand" href="#">HOTEL MAR AZUL</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="html/Login.html">Iniciar sesión</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="html/registrar.html">Registrarse</a>
              </li>
              <li class="nav-item">
                <form class="d-flex" role="search">
             
                  <a class="nav-link active" href="" data-bs-toggle="modal" data-bs-target="#exampleModa" data-bs-whatever="@mdo">Consultar disponibilidad
                  
                            
                    <div class="modal fade" id="exampleModa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModaLabel">Habitaciones </h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                          <table class="table" id="row" onclick="tabla();">
                                <thead>
                                <tr>
                                <th>No de Habitación</td>
                                <th>Categoria</td>
                               
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          include 'php/buscar.php';
                          $query= mostrar('habitacion','numero_hab');
                          while($row=mysqli_fetch_array($query)){
                          ?>
                              <tr id="row1">
                                  <td onclick="tabla();"><?php  echo $row['numero_hab']?></td>
                                  <td><?php  echo $row['categoria']?></td>   
                              </tr>
                          <?php 
                              }
                          ?>    
                                  </tr>
                                </tbody>
                              </table>
                            <div class="modal-footer">
                              <button type="button"  class="btn btn-danger"class="btn btn-secondary" data-bs-dismiss="modal" color ="red">Cerrar</button>
                            </div>
                          </div>
                  </a>
                 
              
              </form>
              </li>
            </ul>
            
          </div>
        </div>
    </nav>

      <!--Carrusel-->
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/fon8.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/fon5.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/fon4.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <br><br><br>



      <!--Inicio contenido-->
      <h1 style="text-align: center; font-family: cursive">Habitaciones</h1>
      <br>
<div class="container text-center">
    <div class="row">
       <div class="col">
              <div class="card" style="width: 20rem; height :30rem; text-align: justify;">
                       <img src="assets/img/cama1.PNG"  height="250" width="100" class="card-img-top" alt="...">
                       <div class="card-body">
                       <h5 class="card-title">Simple</h5>
                       <p class="card-text" >Habitación de una sola
                        cama para máximo 2
                        personas. Incluye
                        baño privado con agua
                        caliente, servicios
                        personales con costo
                        adicional y vista a la playa.
                        Todo por un precio de
                        30.000 la noche</p>
                       </div>
               </div>

       </div>
       <div class="col">
               <div class="card" style="width: 20rem;height :30rem; text-align: justify;">
                       <img src="assets/img/doble.PNG" height="250" width="100" class="card-img-top" alt="...">
                       <div class="card-body">
                       <h5 class="card-title">Doble</h5>
                       <p class="card-text">Habitación de dos camas
                        para máximo 4 personas.
                        Incluye
                        baño privado con agua
                        caliente, servicios
                        personales con costo
                        adicional y vista a la playa.
                        Todo por un precio de
                        90.000 la noche.
                        
                       </p>
                       </div>
               </div>
       </div>
       <br> 
       <div class="col">
               <div class="card" style="width: 20rem;height :30rem; text-align: justify;">
                       <img src="assets/img/hab5.png"  height="250" width="100" class="card-img-top" alt="...">
                       <div class="card-body">
                       <h5 class="card-title">Suite</h5>
                       <p class="card-text">Habitación tipo suite
                        máximo 2 personas. Incluye
                        baño privado con agua
                        caliente, servicios
                        personales con costo
                        adicional y vista a la playa.
                        Todo por un precio de
                        200.000 la noche.</p>
                       </div>
               </div>
               <br><br>
       </div>
 
<h1 style="text-align: center; font-family: cursive;" >Servicios adicionales </h1>
 <br><br> <br> <br>
       <div class="col">
        <div class="card" style="width: 20rem; height :30rem; text-align: justify;">
                 <img src="assets/img/gim.png"   height="250" width="100"class="card-img-top" alt="...">
                 <div class="card-body">
                 <h5 class="card-title">Gimnasio</h5>
                 <p class="card-text" >El hotel cuenta con una piscina donde podra reacrearse en un horario de 10:00 am a 10:00 pm.</p>
                 </div>
         </div>

 </div>
 <div class="col">
         <div class="card" style="width: 20rem;height :30rem; text-align: justify;">
                 <img src="assets/img/res.png"  height="250" width="100" class="card-img-top" alt="...">
                 <div class="card-body">
                 <h5 class="card-title">Restaurante</h5>
                 <p class="card-text">Restaurante
                    El hotel cuenta con un
                    restaurante con vista al mar
                    para sus desayunos de 6:30 am
                    a 9:30 am de lunes a sábado y
                    los domingos de 7:00 am a 10:00 am
                    
                 </p>
                 </div>
         </div>
 </div>
 <div class="col">
         <div class="card" style="width: 20rem;height :30rem; text-align: justify;">
                 <img src="assets/img/pis.png"  height="250" width="100" class="card-img-top" alt="...">
                 <div class="card-body">
                 <h5 class="card-title">Piscina</h5>
                 <p class="card-text">El hotel cuenta con una piscina donde podra reacrearse en un horario de 10:00 am a 10:00 pm.</p>
                 </div>
         </div>
 </div>
   </div>
</div>
<br>
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"> <img src="assets/img/log1.png" alt="cama-img" width="50" height="50"> </i>Hotel Mar Azul
          </h6>
          <p> 
            El hotel Mar Azul es un excelente 
            lugar de hospedaje en la ciudad de 
            Tumaco, cuenta con piscina,vista al 
            mar y sus habitaciones son 
            espectaculares,
            
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contactos</h6> 
          <p><img src="assets/img/iconCalle.png" alt="cama-img" width="30" height="24"> Cll. 13 #11-1, Tumaco, San Andres de Tumaco, Nariño</p>
          <p> <img src="assets/img/iconCorreo.png" alt="cama-img" width="30" height="24">
            
             hotelmarazul@gmail.com
          </p>
          <p> <img src="assets/img/iconCel.png" alt="cama-img" width="30" height="24">  3104276543</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
</footer>
<!-- Footer -->
    
<script >
 
function tabla() {
  /*var obtenerFila1 = document.getElementById("row");
   var elementosFila = obtenerFila1.getElementsByTagName("td");
   
    for (let i=0; i<=5; i++) {
    console.log(elementosFila[i].innerHTML);
    }
  */
  var rows = document.getElementById('row').getElementsByTagName('tr');
  for (i = 0; i < rows.length; i++) {
    rows[i].onclick = function() {
      var result = this.getElementsByTagName('td')[1].innerHTML;
      if(result=='Suite'){
        Swal.fire({
          title: '<strong>¿Desea reserva la habitacion?</strong>',
          icon: 'question',
          html:"<h4>¡Debe inciar sesion para reservar la habitacion!</h4>"+
              "<br><img src='http://localhost/proyecto/assets/img/hab5.png' with='500' height='250' >",
          showCloseButton: true,
          showCancelButton: true,  
          confirmButtonText: 'Si',
          cancelButtonText:'Cancelar',
          cancelButtonAriaLabel:'Thumbs down'})
          .then((result) => {
          //Read more about isConfirmed, isDenied below 
          if (result.isConfirmed) {
            
            window.location.href = "http://localhost/proyecto/html/Login.html";
          } else if (result.isDenied) {
            Swal.fire('Changes are not saved', '', 'info')}})

      }
      if(result=='Doble'){
        Swal.fire({
          title: '<strong>¿Desea reserva la habitacion?</strong>',
          icon: 'question',
          html:"<h4>¡Debe inciar sesion para reservar la habitacion!</h4>"+
              "<br><img src='http://localhost/proyecto/assets/img/doble.PNG' with='500' height='250' >",
          showCloseButton: true,
          showCancelButton: true,  
          confirmButtonText: 'Si',
          cancelButtonText:'Cancelar',
          cancelButtonAriaLabel:'Thumbs down'})
          .then((result) => {
          //Read more about isConfirmed, isDenied below 
          if (result.isConfirmed) {
            
            window.location.href = "http://localhost/proyecto/html/Login.html";
          } else if (result.isDenied) {
            Swal.fire('Changes are not saved', '', 'info')}})

      }
      if(result=='Simple'){
        Swal.fire({
          title: '<strong>¿Desea reserva la habitacion?</strong>',
          icon: 'question',
          html:"<h4>¡Debe inciar sesion para reservar la habitacion!</h4>"+
              "<br><img src='http://localhost/proyecto/assets/img/cama1.PNG' with='500' height='250' >",
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

      }

        console.log(result)
    }

  }
  
}
</script>
</body>
</html>