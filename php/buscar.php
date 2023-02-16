<?php
function buscar($tabla, $id){
	include 'conexion.php';
	session_start();
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
?>
	






