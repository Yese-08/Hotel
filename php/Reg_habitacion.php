<?php
include 'conexion.php';
session_start();	
$categoria = $_POST['categoria'];
$detalles =$_POST['Detalles'];
$precio =$_POST['Precio'];
$estado= 'disponible';

$sql = "INSERT INTO habitacion values(' ', '$categoria','$detalles', '$precio','$estado')";
		$_consulta = mysqli_query($conexion, $sql);
		if($_consulta){			
			Header("Location: ../html/Registro_Habitacion.php");	
        }
        else{
            echo 'error de consulta';
        }

?>