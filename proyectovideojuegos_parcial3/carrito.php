<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video gamestore</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<body style="background-color: #a6caed;">
    
    <?php include 'menu.php';?>
    <br>
        <nav class="nav" style='background-color: #E06666;'>
            <p class="">Hot sale!!!Hot sale!!!Hot sale!!!Hot sale!!!Hot sale!!!Hot sale!!!Hot sale!!!Hot sale!!!
            Hot sale!!!Hot sale!!!Hot sale!!!Hot sale!!!Hot sale!!!Hot sale!!!Hot sale!!!Hot sale!!!Hot sale!!!Hot sale!!!
            Hot sale!!!Hot sale!!!
            </p>
        </nav>
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <hr>
                <div class="container">
                <form action="guardarRegistro.php" method="post">
                <div class="card mb-3" style=background-color:#FFCADF;>
                    <div class="card-header">
                        Registrar
                    </div>
                    <br>
                    <div class="card mb-3" style=background-color:#FFCADF;>
                    <br>
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="gta5.jpg" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <div class="input-group mb-3">
      <div class="input-group-prepend">
                    </div>
                    <input value="GTA5" name="nombre" type="text" class="form-control" placeholder="Ingresa tu usuario" aria-label="nombre" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Descripción</span>
                    </div>
                    <textarea value="" name="nombre" type="text" class="form-control" aria-label="nombre" aria-describedby="basic-addon1">Grand Theft Auto V es un videojuego de 
acción-aventura de mundo abierto</textarea>
                    </div>
                    <input value="$500.00" name="nombre" type="text" class="form-control" placeholder="Ingresa tu usuario" aria-label="nombre" aria-describedby="basic-addon1">
                    </div>
                    <div>
                        <a href="inicio.php" class="btn btn-danger">Regresar</a>
                        <a class="btn btn-primary" href="inicio.php" >Comprar</a>
                    </div>
                    <br>
      </div>
    </div>
  </div>
</div>
                </form></div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.js"></script>
</body>
</html>