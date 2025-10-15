<?php 
	include "conexion.php";
	
	$email= $_GET['email'] ;
	
    $query= "SELECT * FROM cliente where email ='$email'";
	$_consulta= mysqli_query($conexion,$query);
	if(mysqli_num_rows($_consulta)>0){
		header("location: ../html/recuperarContrase.php?emailR=$email" );
	}
	
	else{
		if(isset($_REQUEST['email'])){ ?>
         <meta http-equiv="refresh" content="0;url=../html/Login.php?emailNoexiste=1">';
	<?php }
	}
	

?>
