<?php 
	include "conexion.php";
	
	
	$respuesta= $_GET['respuesta'] ;
	
    $query= "SELECT * FROM cliente where respuesta ='$respuesta'";
	$_consulta= mysqli_query($conexion,$query);
	if(mysqli_num_rows($_consulta)>0){
		header("location: ../html/cambiarContrase.php?respuesta=$respuesta" );
	}
	
	else{
		if(isset($_REQUEST['respuesta'])){ ?>
         <div class="alert show showAlert" style="color:#f44336;">
               <strong> Ops.! </strong>
               La pregunta no existe, por favor Verifique.
        </div>
	<?php }
	}
	

?>