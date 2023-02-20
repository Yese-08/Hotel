<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cambiar contraseña</title>
</head>
<body>
<div class="container" >
            
            <br>
            <h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Responda esta pregunta de seguridad</h1><br>
            <div class="panel panel-primary" >               
                <div class="panel-body" >            
                    <form id="form" class="form-horizontal" role="form" action="../php/cambiarcontra.php" method="post" >
                        <div class="row">
                            <div class="col">                            
                                <div class="col-md-8" style="margin: 0 auto;">
                                    <label>Pregunta</label>
                                    
                                    
                                </div>
                            </div>
                            <div class="col">                         
                                <div class="col-md-7 col-lg-8" style="margin: 0 auto;">
                                    <label>Respuesta 1</label>
                                    <br><input class="form-control" name="respuesta1"   id="respuesta" type="text"  required><br>
                                        <label>Respuesta 2</label>
                                    <br><input class="form-control" name="respuesta2"   id="respuesta" type="text"  required><br>
                                </div>
                            </div>
                            
                        </div>    
                        <input type="hidden" name='email' value= <?php echo $_REQUEST['emailC']?> >  
                        <button type="submit" class="btn btn-primary btn-block mb-4" value="Actualizar"> Enviar respuesta</button>    
                    </form>
                </div>
            </div>
        </div>
</body>
</html>