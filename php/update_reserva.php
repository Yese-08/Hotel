
<?php 
include 'conexion.php';


$codigo=$_POST['Codigo'];


$habitacion=$_POST['Habitacion'];
$Costo=$_POST['Costo'];
$personas=$_POST['N_Persona'];
$fecha_ingreso=$_POST['Fecha_ingreso'];
$fecha_salidad=$_POST['Fecha_salida'];
$noches=$_POST['N_Noches'];
$servicio= $_POST['Servicios'];
$costo_servicios=$_POST['Costos_servicios'];
$total=$_POST['TPagar'];

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