<?php
	include 'conexion.php';
	session_start();	
	$NomApe= $_POST['NomApe'];
	$TipoDoc =$_POST['TipoDoc'];
	$NDocum =$_POST['NDocum'];
    $fechaIngreso =$_POST['fechaIngreso'];
	$Nacionalidad =$_POST['Nacionalidad'];
	$numPer =$_POST['numPer'];
	$Email =$_POST['Email'];
	$Genero =$_POST['Genero'];
	$Usuario =$_POST['Usuario'];
	$contraseña =$_POST['contraseña'];
	
	$sql = "INSERT INTO cliente values('$NomApe', '$TipoDoc','$NDocum', '$fechaIngreso', '$Nacionalidad', '$numPer', '$Email', '$Genero', '$Usuario', '$contraseña')";
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