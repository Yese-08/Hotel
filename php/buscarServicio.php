<?php
include 'conexion.php';

if(!isset($_POST['buscar'])){
    $_POST['buscar']= '';    
    $buscar = $_POST['buscar'];    
 
}   $buscar=$_POST['buscar'];
    $sql="SELECT * FROM servicios WHERE cod	 like '%".$buscar."%' ";
    $query=mysqli_query($conexion,$sql);
    if (mysqli_num_rows($query) <= 0) {
        echo '
            <script> 
                alert("no existe esta habitacion");

            </script>
        ';	

    }

?>