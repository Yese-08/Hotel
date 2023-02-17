<?php




function buscar( $id){
    include 'conexion.php';$sql="SELECT * FROM reserva WHERE numero_reserva='$id'";
    $query=mysqli_query($conexion,$sql);
	return $query;
	
}	
    
?>