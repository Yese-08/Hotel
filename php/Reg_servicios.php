<?php
	include 'conexion.php';
	session_start();	
	$nombre= $_POST['nombre'];
	$precio =$_POST['precio'];
	
	$sql = "INSERT INTO servicios values( '','$nombre', '$precio')";
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