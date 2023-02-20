<?php 
   
    include '../php/conexion.php';
    
    $email = $_GET['email'];
    $respuesta=$_GET['respuesta'];

    $sql="SELECT * FROM cliente WHERE email=$email and respuesta='$respuesta'";
    $query=mysqli_query($conexion,$sql);
    $row=mysqli_fetch_array($query);      

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

    </body>
</html>