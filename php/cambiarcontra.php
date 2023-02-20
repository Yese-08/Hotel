<?php 
	
	//function comprobares(){
		include "conexion.php";
		$email= $_REQUEST['email'] ;
		$respuesta=$_REQUEST['respuesta1'];
        $respuesta1=$_REQUEST['respuesta2'];

        if($respuesta==$respuesta1){
            $sql="UPDATE cliente SET contraseña='$respuesta' WHERE email='$email'";
            $_consulta=mysqli_query($conexion,$sql);
            
            if($_consulta){
                echo '
                <script> alert("Su contraseña fue actualizada exitosamente");</script>';
                header("location: ../html/Login.html" );
            }	
            else{
                echo '
                <script > alert("Respuesta incorrecta, por favor Verifique.");</script>';			
            
            } 
        }
        else{
            echo '
			<script> alert("Las contraseñas no coinciden");</script>';			
		
        }
		
		
	//}
	

?>
