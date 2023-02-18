<?php
function buscar($tabla, $id, $estado){
	include 'conexion.php';
	
	if(!isset($_POST['buscar'])){
		$_POST['buscar']= '';$buscar = $_POST['buscar'];

	 
	} $buscar=$_POST['buscar'];
		$sql="SELECT * FROM $tabla WHERE  $estado like 'disponible".$buscar."%' ";
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