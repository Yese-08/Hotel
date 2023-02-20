<?php
	
    
    include "../php/buscar.php";
    $_consulta= mostrarre('cliente','emailR','email');
    while($Date=mysqli_fetch_assoc($_consulta)){
        $pregunta = $Date['pregunta'];
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Recuperar contraseña</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <script src="../js/popper.min.js" ></script>
      <script src="../js/bootstrap.bundle.min.js"></script>
      <link rel="shortcut icon" href="../assets/img/log1.png" type="image/x-icon">
</head>
<body style="background-image: url(../assets/img/fondo1.jpg); background-repeat: no-repeat;  background-size: cover; ">
    <!--hhh-->    
    <nav class=" navbar bg-dark navbar-expand-lg " data-bs-theme="dark" >
        <div class="container-fluid">
            <p>
                <img src="../assets/img/icon1.png" alt="img-icon1" style="padding: -50px; ">
                <a class="navbar-brand" href="#">HOTEL MAR AZUL</a>
            </p>
        </div>
        </div>
    </nav>
    <!--hhh-->
    <?php 
    /*
    $res=comprobares();
    if($res==false){*/?>
        <div class="container" >
            
            <br>
            <h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Responda esta pregunta de seguridad</h1><br>
            <div class="panel panel-primary" >               
                <div class="panel-body" >            
                    <form id="form" class="form-horizontal" role="form" action="../php/comres.php" method="post" >
                        <div class="row">
                            <div class="col">                            
                                <div class="col-md-8" style="margin: 0 auto;">
                                    <label>Pregunta</label>
                                    <h1 style="text-align: center; font-family: cursive"> <?php echo '<p style="text-align: righ; font-family: cursive">'.$pregunta.'</p>';?> </h1>
                                    
                                </div>
                            </div>
                            <div class="col">                         
                                <div class="col-md-7 col-lg-8" style="margin: 0 auto;">
                                    <label>Respuesta</label>
                                    <br><input class="form-control" name="respuesta"   id="respuesta" type="text"  required><br>
                                </div>
                            </div>
                            
                        </div>    
                        <input type="hidden" name='email' value= <?php echo $_GET['emailR']?> >  
                        <button type="submit" class="btn btn-primary btn-block mb-4" value="Actualizar"> Enviar respuesta</button>    
                    </form>
                </div>
            </div>
        </div>
       
</body>

</html>