<?php 
	
	//function comprobares(){
		include "conexion.php";
		$email= $_REQUEST['email'];
		$respuesta=$_REQUEST['respuesta1'];
        $respuesta1=$_REQUEST['respuesta2'];
        
        if($respuesta == $respuesta1){
            $sql="UPDATE cliente SET contraseña='$respuesta1'  WHERE email='$email'";
            $_consulta=mysqli_query($conexion,$sql);
            
            if($_consulta ){
                header("location:http://localhost/proyecto/html/cambiarcontrase.php?emailC=$email&seActualizo=1" );
            }	
            else{
                echo '
                <script > alert("error de consulta");</script>';
                header("location: ../html/cambiarcontrase.php" );
              
            } 
        }
        else{
            
            header("location:http://localhost/proyecto/html/cambiarcontrase.php?emailC=$email&noCoincide=1" );
			
           	
		
        }
		
	//}
	

?>
