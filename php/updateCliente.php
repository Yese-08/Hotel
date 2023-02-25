<?php

include 'conexion.php';
session_start();

$Nombre =$_POST['NomApe'];
$TipoDoc = $_POST['TipoDoc'];
$NumDoc =$_POST['NDocum'];
$fechaNac =$_POST['fechaNac'];
$Nacionalidad =$_POST['Nacionalidad'];
$Telefono =$_POST['numPer'];
$Email =$_POST['Email'];
$Genero =$_POST['Genero'];


$sql="UPDATE cliente SET  nombre ='$Nombre', tipo_documento='$TipoDoc', numero_documento='$NumDoc', fecha_nacimiento='$fechaNac', nacionalidad='$Nacionalidad', telefono='$Telefono', email='$Email', genero='$Genero' WHERE numero_documento='$NumDoc'";

$_consulta=mysqli_query($conexion,$sql);

   
    if($_consulta ){		
       
       if($_SESSION['user'] == 'usuario'){
            header ('location: http://localhost/proyecto/html/Informacion_Cliente.php');
            
        }
       else if($_SESSION['user'] == 'Recepcionista'){
        echo '<meta http-equiv="refresh" content="0;url=http://localhost/proyecto/html/pageRecepcionista.php">';
       }

       
    }       
    else{
        echo 'error de consulta';
    }
?>

