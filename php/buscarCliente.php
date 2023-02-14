<?php
include 'conexion.php';
	if(!isset($_POST['buscar'])){
		$_POST['buscar']= '';    
		$buscar = $_POST['buscar'];    
	 
	}   $buscar=$_POST['buscar'];
		$sql="SELECT * FROM cliente WHERE numero_documento	 like '%".$buscar."%' ";
		$query=mysqli_query($conexion,$sql);
		if (mysqli_num_rows($query) <= 0) {
			echo '
				<script> 
					alert("No existe este cliente");
	
				</script>
			';	
	
		}

	
?>
	