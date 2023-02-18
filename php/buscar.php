<?php
function buscar($tabla, $id){
	include 'conexion.php';
	
	if(!isset($_POST['buscar'])){
		$_POST['buscar']= '';$buscar = $_POST['buscar'];

	 
	} $buscar=$_POST['buscar'];
		$sql="SELECT * FROM $tabla WHERE  $id like '%".$buscar."%' ";
		$query=mysqli_query($conexion,$sql);
		if (mysqli_num_rows($query) <= 0) {
			echo '
				<script> 
					alert("Tu busqueda no se ha encontrado");
	
				</script>
			';
		}
	return $query;
	
}	

function mostrar($tabla, $id,){
	include 'conexion.php';
	if($tabla== 'habitacion'){
		$getServicios1 = "SELECT * FROM $tabla where estado ='Disponible' order by $id";
		$getServicios2 = mysqli_query($conexion,$getServicios1);
		return $getServicios2 ;

	
	}elseif($tabla== 'servicios'){
		$getServicios1 = "SELECT * FROM $tabla  order by $id";
		$getServicios2 = mysqli_query($conexion,$getServicios1);
	}
	
	return $getServicios2;
}	

function mostrarre($tabla, $id,$nomcol){
	include 'conexion.php';
	$cod_reserva=$_GET[$id];
    $sql="SELECT * FROM $tabla WHERE $nomcol='$cod_reserva'";
    $query=mysqli_query($conexion,$sql);
	return $query;
	
}	




?>
	






