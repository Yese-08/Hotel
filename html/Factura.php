<?php 
include '../php/function_validarSesion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reporte de reserva </title>
    <link rel="stylesheet" href="../css/factura.css">
    <link rel="shortcut icon" href="../assets/img/log1.png" type="image/x-icon">
</head>
<body>
  <div class="control-bar">
    <div class="container">
      <div class="row">
        <div class="col-2-4">
          <div class="slogan">Facturación
            <a href="#">volver</a>
            <a href="">¿Necesito ayuda?</a>
          </div>
          
        </div>
        <div class="slogan">
          <a href="javascript:window.print()">Imprimir</a>
        </div><!--.col-->
      </div><!--.row-->
    </div><!--.container-->
  </div><!--.control-bar-->

  <header class="row">
  <div class="logoholder text-center" >
    <img class="img-responsive" height="50" width="60" src="../assets/img/log1.png">
  </div><!--.logoholder-->

    <div class="me">
      <p >
        <strong>HOTEL MAR AZUL</strong><br>
        Municipio Tumaco<br>
        Colombia<br>
        
      </p>
    </div><!--.me-->

    <div class="info">
      <p >
        Web: <a href="#">www.HotelMarAzul.com</a><br>
        E-mail:<a href="#"> Hotelmarazul@gmail.com</a><br>
        Tel: 3104276543<br>
        Direccion: Cl. 13#11-1, San Andres de Tumaco, Nariño
      </p>
    </div><!-- .info -->
  </header>


  <div class="row section">
                    
    <div class="col-2">
      <h1 >Factura</h1>
    </div><!--.col-->
    <?php 
    include '../php/buscar.php';
    $query=mostrarre('reserva','numero_reserva','numero_reserva');
   
    while($row=mysqli_fetch_array($query)){
  ?>     
    <div class="col-2 text-right details">
      <p >
      Fecha inicio:  <?php  echo $row['fecha_ingreso']?><br>
      Fecha final : <?php  echo $row['fecha_salida']?><br>
      
      </p>  
    </div><!--.col-->
    <hr><br>
    <div class="col">
      
      <br>
      <p  class="client">
        <strong>Datos del Cliente</strong><br>
        Nombres:  <?php  echo $row['nombre_cliente']?><br>
        Identificacion:   <?php  echo $row['numero_documento']?> <br>
        Correo electronico:   <?php  echo $row['email']?>   
      </p>   
    </div><!--.col-->
      
    <div class="col">  
      <br>
      <p  class="client">
        <strong>Datos de la reserva</strong><br>
        <strong>Codigo: <?php  echo $row['numero_reserva']?><br> </strong> 
        N° habitacion: <?php  echo $row['numero_hab']?><br>
        Categoria: <?php  echo $row['numero_hab']?> <br>
        Costo habitacion: $ <?php  echo $row['costo']?> <br>
        N° personas:<?php  echo $row['numero_personas']?> <br>
      </p>
    </div><!--.col-->

    <div class="col">  
      <br>
      <p  class="client">
        <strong>Servicios adicionales</strong><br>
        Nombre: <?php  echo $row['servicios_adicionales']?> <br>
        Costo: $<?php  echo $row['costo_servicio']?> <br>
        
      </p>
    </div><!--.col-->
  </div><!--.row-->
    
  <div class="invoicelist-body">
    <table>
      <thead >
        <th width="5%">N° Noches </th>
        <th width="10%">servicio adicional  $</th>
        <th width="15%">Precio $</th>
        <th width="10%">Total $</th>
      </thead>
      <tbody>      
        <tr>
          <td width='5%'><?php  echo $row['numero_noches']?></td>         
          <td class="amount"><?php  echo '$'.$row['costo_servicio']?></td>          
          <td ><?php  echo '$'.$row['costo']?> </td>
          <td ><?php  echo '$'.$row['total_pagar']?></td>
        </tr>
      </tbody>
    </table>
  </div><!--.invoice-body-->
  <?php 
    }
    ?>

  <div class="note" >
    
    <h2>Nota:<p ><strong>  Recuerda llevar tu factura para validar tu reserva.</strong><br>
      <strong>Si desea cancelar o modificar la reserva, comuniquese con nosotros </strong></p> </h2>
  </div><!--.note-->

 
  </body>
  
</html>