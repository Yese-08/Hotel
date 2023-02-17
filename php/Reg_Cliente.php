<?php
	include 'conexion.php';
	session_start();	
	$T_usuario= $_POST['T_usuario'];
	$NomApe= $_POST['NomApe'];
	$TipoDoc =$_POST['TipoDoc'];
	$NDocum =$_POST['NDocum'];
    $fechaNacimiento =$_POST['fechaNac'];
	$Nacionalidad =$_POST['Nacionalidad'];
	$numPer =$_POST['numPer'];
	$email =$_POST['Email'];
	$Genero =$_POST['Genero'];
	$Usuario =$_POST['Usuario'];
	$contraseña =$_POST['contraseña'];


	$verificar_correo = pg_query($conexion,"SELECT * FROM cliente WHERE Email='$email' ");
	if (mysqli_num_rows($verificar_correo) > 0) {
		echo '
			<script> 
				alert("este correo ya se encuentra registrado, intenta con otro diferente");
					
			</script>
		';	
	}
	else{
	
	if($_consulta){	
	$sql = "INSERT INTO cliente values('$NomApe', '$TipoDoc','$NDocum', '$fechaNacimiento', '$Nacionalidad', '$numPer', '$Email', '$Genero', '$Usuario', '$contraseña','$T_usuario')";
		$_consulta = mysqli_query($conexion, $sql);
				
			echo '
			<script> 
				alert("se registro exitosamente");

			</script>
		';	
        }
        else{
            echo 'error de consulta';
   }    }

?>