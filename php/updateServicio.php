<?php

include 'conexion.php';


$codigo =$_POST['codigo'];
$nombre = $_POST['nombre'];
$precio =$_POST['precio'];


$sql="UPDATE servicios SET nombre='$nombre', precio='$precio' WHERE cod='$codigo'";

$_consulta=mysqli_query($conexion,$sql);

   
    if($_consulta ){		
        echo '
			<script> 
				alert("se actualizó exitosamente");
			</script>
		';	
        Header("Location: ../html/Registro_Servicios.php");
    }
    else{
        echo 'error de consulta';
    }
?>