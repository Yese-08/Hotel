<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Clientes</title>

    <!-- Lineas importantes-->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/popper.min.js" ></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="../assets/img/log1.png" type="image/x-icon">
    
</head>
<body style="background-image: url(../assets/img/fondo1.jpg); background-repeat: no-repeat;  background-size: cover;">
    <!---MENÚ PRINCIPAL-->
    <script src="../js/menu.js"></script>
  <!--FIN MENÚ PRINCIPAL-->
 
  <br><br>
  <br><br>
  <div class="container mt-5">
    <div class="row">                         
        <div class="col-md-3">
            <h2>Buscar habitacion</h2>

                <form action="Ver_Clientes.php" method="POST">
                    <input type="text" class="form-control mb-3" name="buscar" placeholder="Numero de documento" require>
                     
                    <input type="submit" class="btn btn-primary" value="Buscar">
                </form>
                
               
                <br>

                </div>
                <div class="col-md-8">
                    <table class="table" >
                        <thead class="table-success table-striped" >
                            <tr>
                                <th>Nombre y Apellido</th>
                                <th>Tipo de documento</th>
                                <th >N° Documento</th>
                                <th >Fecha de nacimiento</th>                           
                                <th>Nacionalida</th>
                                <th>Telefono</th>
                                <th>Email</th>
                                <th>Genero</th>
                                <th>Actualizar </th>
                                
                                <th></th>
                                
                            </tr>
                        </thead>

                        <tbody>
                                <?php
                                include '../php/buscarCliente.php';
                                while($row=mysqli_fetch_array($query)){
                                ?>
                                    <tr>
                                        <th><?php  echo $row['nombre']?></th>
                                        <th><?php  echo $row['tipo_documento']?></th>
                                        <th><?php  echo $row['numero_documento']?></th>
                                        <th><?php  echo $row['fecha_nacimiento']?></th>
                                        <th><?php  echo $row['nacionalidad']?></th>
                                        <th><?php  echo $row['telefono']?></th>
                                        <th><?php  echo $row['email']?></th>
                                        <th><?php  echo $row['genero']?></th>
                                                                              
                                        <th></th>  
                                        <th><a href="../php/Actua_cliente.php?numero_documento=<?php echo $row['numero_documento'] ?>"> <img src="../assets/img/icon3.png" alt="Actualizar" width="30" height="24"></a></th>                                                                                        
                                    </tr>
                                <?php 
                                    }
                                ?>
                                
                      </tbody>                                
        </div>
    </div>  
</div>    
    
    <br>
    <br>

    
  <!--FIN CONTENIDO-->
</body>

    

</html>