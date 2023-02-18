<?php

include 'conexion.php';


$N_habitacion =$_POST['habitacion'];
$Categoria = $_POST['Categoria'];
$Detalles =$_POST['Detalles'];
$Precio =$_POST['Precio'];


$sql="UPDATE habitacion SET  categoria='$Categoria', detalles='$Detalles', precio='$Precio' WHERE numero_hab='$N_habitacion'";

$_consulta=mysqli_query($conexion,$sql);

   
    if($_consulta ){		
        echo '
			<script> 
				alert("se actualizó exitosamente");
			</script>
		';	
        Header("Location: ../html/Registro_Habitacion.php");
    }
    else{
        echo 'error de consulta';
    }
?>