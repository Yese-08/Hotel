<?php
	include("conexion.php");
	 
        if(isset($_POST['buscar'])){ 
            $n_habitacion = $_POST['Nhabitacion'];
            $valores = array();
            $valores['existe'] = "0";

            //CONSULTAR
            $resultados = mysqli_query($conexion,"SELECT * FROM habitacion WHERE numero_hab = '$n_habitacion'");
            if($resultados){
                while($consulta = mysqli_fetch_array($resultados))
                {
                    $valores['existe'] = "1"; //Esta variable no la usamos en el vídeo (se me olvido, lo siento xD). Aqui la uso en la linea 97 de registro.php
                    $valores['precio'] = $consulta['precio'];
                }
                sleep(1);
                $valores = json_encode($valores);
                    echo $valores;
            }else{
                echo 'error de consulta';
            }
        }
        else if(isset($_POST['buscar1'])){
            $cod = $_POST['serviciosAd'];
            $valores = array();
            $valores['existe'] = "0";

            //CONSULTAR
            $resultados = mysqli_query($conexion,"SELECT * FROM servicios WHERE nombre = '$cod'");
            if($resultados){
                while($consulta = mysqli_fetch_array($resultados))
                {
                    $valores['existe'] = "1"; //Esta variable no la usamos en el vídeo (se me olvido, lo siento xD). Aqui la uso en la linea 97 de registro.php
                    $valores['precio'] = $consulta['precio'];
                }
                sleep(1);
                $valores = json_encode($valores);
                    echo $valores;
            }else{
                echo 'error de consulta';
            }
        }
?>

