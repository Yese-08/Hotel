<?php 
include 'conexion.php';
session_start();	
$nombre_client= $_POST['NomApe'];
$tipo_documento=$_POST['Tdocumento'];
$numero_documento=$_POST['NDocum'];
$fecha_nacimiento =$_POST['FNacimiento'];
$nacionalidad=$_POST['nacionalidad'];
$telefono =$_POST['Telefono'];
$email =$_POST['Email'];
$genero =$_POST['genero'];
$numero_hab=$_POST['Nhabitacion'];
$costo =$_POST['CostoH'];
$numero_personas =$_POST['NPerso'];
$fecha_ingreso =$_POST['FIngreso'];
$fecha_salida =$_POST['FSalida'];
$numero_noches =$_POST['NNoches'];
$servicios_adicionales =$_POST['serviciosAd'];
$costo_servicio =$_POST['CServicio'];
$total_pagar =$_POST['TPagar'];


$sql = "INSERT INTO reserva values('', '$nombre_client','$tipo_documento', '$numero_documento', '$fecha_nacimiento', '$nacionalidad','$telefono', '$email', '$genero', '$numero_hab', '$costo','$numero_personas','$fecha_ingreso','$fecha_salida','$numero_noches','$servicios_adicionales','$costo_servicio','$total_pagar')";
    $_consulta = mysqli_query($conexion, $sql);
    if($_consulta ){		
        echo '
			<script> 
				alert("se registro exitosamente");

			</script>
		';	
    }
    else{
        echo 'error de consulta';
    }

?>