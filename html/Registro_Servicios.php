<?php 
include '../php/function_validarSesion.php'
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Registrar Servicios</title>

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
 
  <br><br>
  <br><br>
  <!---INICIO CONTENIDO-->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Registrar servicios</button>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <form action="../php/Reg_servicios.php" method="post">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar servicios</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">          
          <div class="form-floating mb-3">
          <input type="text" class="form-control" name="NomServicio" id="NomServicio" placeholder="Nombre" required>
          <label for="floatingInput">Nombre</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="CostServicio" id="CostServicio" placeholder="Costo" required>
            <label for="floatingInput">Costo</label>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
      </form>
      </div>
    </div>
  </div>
            
<br>
<br>

  <div class="container mt-5">
    <div class="row">                         
      <div class="col-md-3">
        <h2>Buscar servicio</h2>
        <div class="container mt-5">
                <form action="Registro_Servicios.php" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Código de servicio" name="buscar">
                    <button class="btn btn-dark btn-lg btn-block" type="submit" id="button-addon2" value = "buscar">Buscar</button>
                </div>
                </form>
                </div>
      </div>
</div>
<br>
      <div class="col-md-8">
        <table class="table table-striped table-hover table-primary   table-responsive" >
          <thead class=" table-striped table-dark" >
              <tr>
                  <th>Código</th>
                  <th>Nombre</th>
                  <th>Costo</th> 
              </tr>
          </thead>
          <tbody>
            <?php
            include '../php/buscar.php';
            $query= buscar('servicios','cod');
            while($row=mysqli_fetch_array($query)){
            ?>
                <tr>
                    <th><?php  echo $row['cod']?></th>
                    <th><?php  echo $row['nombre']?></th>
                    <th><?php  echo "$".$row['precio']?></th>                                       
                    
                        
                </tr>
            <?php 
                }
            ?>
          </tbody>
                                       
      </div>
    </div>  
  </div>
  <!--FIN CONTENIDO-->
</body>
</html>