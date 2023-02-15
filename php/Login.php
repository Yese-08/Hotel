<?php 
	include "conexion.php";
	session_start();
	$email= $_POST['email'] ;
	$password= $_POST['password'] ;

	$query= "SELECT * FROM cliente where email ='$email' and contraseña ='$password'";
	$_consulta= mysqli_query($conexion,$query);
	if(mysqli_num_rows($_consulta)>0){
		
		while ($obj = mysqli_fetch_object($_consulta)) {
			if ( $obj->tipo_usuario == 'Recepcionista'){
				header("location: ../html/pageRecepcionista.html" );
			}
			else{
				header("location: ../html/pageCliente.html" );
			}
		}
	}else{
		echo "El usuario y contraseña no existe";
	
	}
	

?>



