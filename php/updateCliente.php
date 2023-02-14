<?php

include 'conexion.php';


$Nombre =$_POST['NomApe'];
$TipoDoc = $_POST['TipoDoc'];
$NumDoc =$_POST['NDocum'];
$fechaNac =$_POST['fechaNac'];
$Nacionalidad =$_POST['Nacionalidad'];
$Telefono =$_POST['numPer'];
$Email =$_POST['Email'];
$Genero =$_POST['Genero'];
$Usuario =$_POST['Usuario'];
$Contraseña =$_POST['contraseña'];

$sql="UPDATE cliente SET  nombre ='$Nombre', tipo_documento='$TipoDoc', numero_documento='$NumDoc', fecha_nacimiento='$fechaNac', nacionalidad='$Nacionalidad', telefono='$Telefono', email='$Email', genero='$Genero', usario='$Usuario', contraseña='$Contraseña' WHERE numero_documento='$NumDoc'";

$_consulta=mysqli_query($conexion,$sql);

   
    if($_consulta ){		
        echo '
			<script> 
				alert("se registro exitosamente");
			</script>
		';	
        Header("Location: ../html/Ver_Clientes.php");
    }
    else{
        echo 'error de consulta';
    }
?>