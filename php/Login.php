<?php 
	include "conexion.php";
	session_start();
	error_reporting(0);

	$email= $_POST['email'] ;
	$password= $_POST['password'] ;


	$query= "SELECT * FROM cliente where email= '$email' and contraseña= '$password'";

	

	$_consulta= mysqli_query($conexion,$query);
	if(mysqli_num_rows($_consulta)>0){
		
		while ($obj = mysqli_fetch_object($_consulta)) {
			$_SESSION['usuario'] = $obj->nombre;
				$_SESSION['user'] = $obj->tipo_usuario;
				$_SESSION['ide'] = $obj->numero_documento;

			if ( $obj->tipo_usuario == 'Recepcionista'){
				echo "<script>window.location.href = '../html/pageRecepcionista.php';</script>";
			
				
			}
			else if ( $obj->tipo_usuario == 'usuario'){
				header("location: ../html/pageCliente.php");
			
			;	
				
				
			}
		}
	}
	else{
		echo "Consulta SQL: $query <br>";
			
	}

?>



