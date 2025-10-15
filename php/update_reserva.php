
<?php 
include 'conexion.php';


$codigo=$_POST['Codigo'];


$habitacion=$_POST['Nhabitacion'];
$Costo=$_POST['CostoH'];
$personas=$_POST['N_Persona'];
$fecha_ingreso=$_POST['Fecha_ingreso'];
$fecha_salidad=$_POST['Fecha_salida'];
$noches=$_POST['N_Noches'];
$servicio= $_POST['serviciosAd'];
$costo_servicios=$_POST['CServicio'];
$total=$_POST['TPagar'];

echo $Costo;
$sql="UPDATE reserva SET  numero_hab ='$habitacion', costo ='$Costo', numero_personas='$personas', fecha_ingreso='$fecha_ingreso', fecha_salida='$fecha_salidad', numero_noches='$noches', servicios_adicionales='$servicio', costo_servicio='$costo_servicios', total_pagar='$total' WHERE numero_reserva='$codigo'";

$_consulta=mysqli_query($conexion,$sql);

   
    if($_consulta ){		
        echo '
			<script> 
				alert("se registro exitosamente");
			</script>
		';	
       header("Location: ../html/Registro_Reservas.php");
    }
    else{
        echo 'error de consulta';
    }
?>