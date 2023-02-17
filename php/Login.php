<?php 
	include "conexion.php";
	session_start();
	error_reporting(0);

	$email= $_POST['email'] ;
	$password= $_POST['password'] ;

	$query= "SELECT * FROM cliente where email ='$email' and contraseña ='$password'";
	$_consulta= mysqli_query($conexion,$query);
	if(mysqli_num_rows($_consulta)>0){
		
		while ($obj = mysqli_fetch_object($_consulta)) {
			if ( $obj->tipo_usuario == 'Recepcionista'){
				header("location: ../html/pageRecepcionista.php" );
				$_SESSION['usuario'] = $obj->nombre;
				echo "Rececionista";
				
				
			}
			else if ( $obj->tipo_usuario == 'usuario'){
				header("location: ../html/pageCliente.php" );
				$_SESSION['usuario'] = $obj->nombre;
				$_SESSION['ide'] = $obj->numero_documento;
				echo "Cliente";
				
			}
		}
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



