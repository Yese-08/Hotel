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
	$pregunta =$_POST['pregunta'];
	$respuesta =$_POST['respuesta'];
	$Usuario =$_POST['Usuario'];
	$contraseña =$_POST['contraseña'];


	$verificar_correo =  mysqli_query($conexion,"SELECT * FROM cliente WHERE email='$email'  ");
	if (mysqli_num_rows($verificar_correo) > 0) {
		header("../html/registrar.php?correoYaExiste=1");
		
		
	}
	$verificar_documento =  mysqli_query($conexion,"SELECT * FROM cliente WHERE   numero_documento='$NDocum'");
	if (mysqli_num_rows($verificar_documento) > 0) {
		header("../html/registrar.php?documentoYaExiste=1");
	}
	$verificar_usuario =  mysqli_query($conexion,"SELECT * FROM cliente WHERE usuario='$Usuario'");
	if (mysqli_num_rows($verificar_usuario) > 0) {
		header("../html/registrar.php?usuarioYaExiste=1");
	}
	else {	
		$sql = "INSERT INTO cliente values('$NomApe', '$TipoDoc','$NDocum', '$fechaNacimiento', '$Nacionalidad', '$numPer', '$email', '$Genero','$pregunta','$respuesta', '$Usuario', '$contraseña','$T_usuario')";
		$_consulta = mysqli_query($conexion, $sql);
		
			echo '
			<<meta http-equiv="refresh" content="0;url=../html/registrar.php?seRegistro=1">';
			
        
       
   }    

?>