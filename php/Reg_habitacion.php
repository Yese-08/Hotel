<?php
include 'conexion.php';
session_start();	
$categoria = $_POST['categoria'];
$detalles =$_POST['Detalles'];
$precio =$_POST['Precio'];

$sql = "INSERT INTO habitacion values('', '$categoria','$detalles', '$precio')";
		$_consulta = mysqli_query($conexion, $sql);
		if($_consulta){			
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