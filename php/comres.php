<?php 
	
	//function comprobares(){
		include "conexion.php";
		$email= $_REQUEST['email'] ;
		$respuesta=$_REQUEST['respuesta'];

		$query= "SELECT * FROM cliente where email ='$email' and respuesta='$respuesta'";
		$_consulta= mysqli_query($conexion,$query);
		if(mysqli_num_rows($_consulta)>0){
			header("location: ../html/cambiarcontrase.php?emailC=$email" );
		}	
		else{
			echo '
			<script> alert("Respuesta incorrecta, por favor Verifique.");</script>';			
		
		}
		
	//}
	

?>
