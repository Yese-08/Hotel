<?php
include 'conexion.php';
session_start();
 $numero_reserva=$_GET['numero_reserva'];
 $sql="SELECT * FROM reserva WHERE numero_reserva='$numero_reserva'";
 $query=mysqli_query($conexion,$sql);
      

if(($query)>0){
    if($query){
        $sql= "DELETE FROM reserva where numero_reserva ='$numero_reserva' ";
        $query= mysqli_query($conexion,$sql);
		echo '
        <script> 
            alert("Se elimino exitosamente ");  
        </script>
        ';	
        Header("Location:../html/Registro_Reservas.php");	
	}
    
}
else{
        echo '
        <script> 
            alert("No existe en la base de datos ");
                
        </script>
    ';	

    Header("Location: ../html/Registro_Reserva.php");	
}    
?>
