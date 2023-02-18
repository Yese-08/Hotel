<?php
	include "../php/conexion.php";
    include "../php/function_validarSesion.php";
    
    $user = $_SESSION['ide'];
    $query= "SELECT nombre, tipo_documento, numero_documento, fecha_nacimiento, nacionalidad, telefono, email, genero FROM cliente where numero_documento='$user'";
	$_consulta= mysqli_query($conexion,$query);
    while($Date=mysqli_fetch_assoc($_consulta)){
        $nombre = $Date['nombre'];
        $T_Documento = $Date['tipo_documento'];
        $n_Documento = $Date['numero_documento'];
        $fecha = $Date['fecha_nacimiento'];
        $nacionalidad = $Date['nacionalidad'];
        $telefono = $Date['telefono'];
        $email = $Date['email'];
        $genero = $Date['genero'];
       
    }
?>
    

<!DOCTYPE html>
<html lang="en">
<?php
  if($_SESSION['user']== 'usuario'){?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion cliente</title>
    
    <!-- Lineas importantes-->
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

    <div class="container" >
        
        <br>
        <h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Mis datos</h1><br>
        <div class="panel panel-primary" >               
            <div class="panel-body" >            
                <form id="form" class="form-horizontal" role="form" action="../php/updateCliente.php" method="post" >
                    <div class="row">
                        <div class="col">                            
                            <div class="col-md-8" style="margin: 0 auto;">
                                <label>Nombres</label>
                                <input class="form-control" name="NomApe" id="Nombre" type="text" value= <?php echo $nombre?> required/>
                            </div>
                        </div>
                        <div class="col">                         
                            <div class="col-md-7 col-lg-8" style="margin: 0 auto;">
                                <label>Procedencia</label>
                                <br><input class="form-control" name="Nacionalidad"  id="Nacionalidad" type="text" value = <?php echo $nacionalidad?> required><br>
                            </div>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col">                            
                            <div class="col-md-8" style="margin: 0 auto;">
                                <label>Tipo documento</label>
                                <input class="form-control" name="TipoDoc" id="TDocume" type="text" value= <?php echo $T_Documento?> required/>
                            </div>
                        </div>
                        <div class="col">                         
                            <div class="col-md-7 col-lg-8" style="margin: 0 auto;">
                                <label>Telefono</label>
                                <br><input class="form-control" name="numPer"  id="Telefono" type="text" value= <?php echo $telefono?> required><br>
                            </div>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col">                            
                            <div class="col-md-8" style="margin: 0 auto;">
                                <label>N° Documento</label>
                                <br><input class="form-control" name="NDocum"  id="NDocume" type="text" value= <?php echo $n_Documento?> required><br>
                            </div>
                        </div>
                        <div class="col">                         
                            <div class="col-md-7 col-lg-8" style="margin: 0 auto;">
                                <label>Correo electronico</label>
                                <br><input class="form-control" name="Email"  id="Email" type="email" value= <?php echo $email?> required><br>
                            </div>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col">                            
                            <div class="col-md-8" style="margin: 0 auto;">
                                <label>Fecha de nacimiento</label>
                                <input class="form-control" name ="fechaNac" id="FNacimiento" type="text" value= <?php echo $fecha?> required/>
                            </div>
                        </div>
                        <div class="col">        
                                             
                            <div class="col-md-7 col-lg-8" style="margin: 0 auto;">
                                <label>Genero</label>
                                <br><input class="form-control" name="Genero"  id="Genero" type="text" value= <?php echo $genero?> required><br>
                            </div>
                        </div>
                    </div>
                    

                    <button type="submit" class="btn btn-primary btn-block mb-4" value="Actualizar"> Actualizar</button>    
                </form>
            </div>
        </div>
    </div>

</body>
</html>
<?php
}else{echo 'usuario no tiene acceso';}?>