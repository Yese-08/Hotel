<?php 
	include "conexion.php";
	
	$email= $_POST['email'] ;
	
    $query= "SELECT * FROM cliente where email ='$email'";
	$_consulta= mysqli_query($conexion,$query);
	if(mysqli_num_rows($_consulta)>0){
		header("location: ../html/recuperarContrase.php" );
	}
	
	else{
		if(isset($_REQUEST['email'])){ ?>
         <div class="alert show showAlert" style="color:#f44336;">
               <strong> Ops.! </strong>
               El Correo no Existe, por favor Verifique.
        </div>
	<?php }
	}
	

?>
