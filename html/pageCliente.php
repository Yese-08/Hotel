<?php 
include '../php/function_validarSesion.php'
?>
<!DOCTYPE html>
<html>
<?php
  if($_SESSION['user']== 'usuario'){?>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cliente</title>
     <!-- Lineas importantes-->
     <meta name='viewport' content='width=device-width, initial-scale=1'>
     <link rel="stylesheet" href="../css/bootstrap.min.css">
     <link rel="stylesheet" href="../css/clienteFondo animado.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
     <script src="../js/popper.min.js"></script>
     <script src="../js/bootstrap.bundle.min.js"></script>
     <link rel="shortcut icon" href="../assets/img/log1.png" type="image/x-icon">
</head>
<body>
  
  <script src="../js/menu3.js"></script>
  
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  
  <h1 style="text-align: center; font-family: cursive"> ----- <?php echo '<strong style="text-align: center; font-family: cursive">'.$varsesion.'</strong>';?> -----  </h1>
  <h1 style="text-align: center; font-family: cursive"> ° BIENVENIDO(A) ° </h1>
  <h2 style="text-align: center; font-family: cursive">----- A NUESTRO -----</h2>
  <h2 style="text-align: center; font-family: cursive" >PEQUEÑO HOGAR</h2>
  <h1 style="text-align: center; font-family: cursive">°°°°° AHORA °°°°°</h1>
  <u><h2 style="text-align: center; font-family: cursive ">RÍETE Y SÉ FELIZ</h2></u>
  <br>
  <div style="text-align: center;">
  <img src="../assets/img/Bob.gif" alt="Funny image"> 
</div>
</body>
</html>
<?php
}else{echo 'usuario no tiene acceso';}?>