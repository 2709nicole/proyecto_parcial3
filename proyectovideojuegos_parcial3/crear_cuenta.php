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
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <hr>
                <div class="container">
                <form action="guardarRegistro.php" method="post">
                <div class="card text-center">
                    <div class="card-header">
                        Crear cuenta
                    </div>
                    <div class="card-body">
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Nombre</span>
                    </div>
                    <input value="Nicole" name="nombre" type="text" class="form-control" placeholder="Ingresa tu usuario" aria-label="nombre" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Apellido</span>
                    </div>
                    <input value="Espinoza" name="nombre" type="text" class="form-control" placeholder="Ingresa tu contraseña" aria-label="nombre" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Nombre de usuario</span>
                    </div>
                    <input value="nick_27" name="nombre" type="text" class="form-control" placeholder="Ingresa tu contraseña" aria-label="nombre" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Correo</span>
                    </div>
                    <input value="nicoleesp@gmail.com" name="nombre" type="text" class="form-control" placeholder="Ingresa tu contraseña" aria-label="nombre" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Número de teléfono</span>
                    </div>
                    <input value="6675240505" name="nombre" type="text" class="form-control" placeholder="Ingresa tu contraseña" aria-label="nombre" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Contraseña</span>
                    </div>
                    <input value="**********" name="nombre" type="text" class="form-control" placeholder="Ingresa tu contraseña" aria-label="nombre" aria-describedby="basic-addon1">
                    </div>
                    <div>
                        <a href="inicio.php" class="btn btn-danger">Regresar</a>
                        <a class="btn btn-primary" href="inicio.php" >Crear cuenta</a>
                    </div>
                </form></div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.js"></script>
</body>
</html>