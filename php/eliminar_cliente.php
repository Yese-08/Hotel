<?php
include 'conexion.php';

session_start();
$user = $_SESSION['ide'];
$sql="SELECT * FROM cliente WHERE numero_documento='$user'";
$query=mysqli_query($conexion,$sql);
      

if(($query)>0){
    if($query){
        $sql= "DELETE FROM cliente where numero_documento='$user'";
        $query= mysqli_query($conexion,$sql);
		echo '
        <script> 
            alert("Se elimino exitosamente ");  
        </script>
        ';	
        include 'cerrar_sesion.php';
        Header("Location:http://localhost/proyecto/");	
	}
    
}
else{
        echo '
        <script> 
            alert("No existe en la base de datos ");
                
        </script>
    ';	

    Header("Location:index.php");	
}    
?>