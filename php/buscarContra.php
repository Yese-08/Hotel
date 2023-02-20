<?php 
	include "conexion.php";
	
	
	$respuesta= $_GET['respuesta'] ;
	$respuesta2 = $_GET['respuesta2'];
   
	
	if($respuesta==$respuesta2){
		echo 'Exito';
	}
		if(isset($_REQUEST['respuesta'])){ echo $respuesta2, $respuesta?>
         <div class="alert show showAlert" style="color:#f44336;">
               <strong> Ops.! </strong>
               
			   La respuesta no existe, por favor Verifique.
        </div>
	<?php }
	
	

?>