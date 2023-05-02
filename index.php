<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="css/bootstrap.bundle.min.js"></script>
    <title>Login</title>
</head>
<body>
    <br><br><br><br><br><br><br><br><br>
    <div class="row align-content-center justify-content-center vh-50">

        <div class="col-auto border rounded p-4">
            <form action="validar.php" method="post">
                <a href="index2.php" class="btn btn-danger"><--</a>
                    <label class="row align-content-center justify-content-center" for="">Ingrese sus datos</label>
                <div class="row align-content-center justify-content-center form-group m-2">
                    <label for="">Matricula</label>
                    <input required type="number" name="Matricula" placeholder="Matricula">
                </div>

                <div class="row align-content-center justify-content-center form-group m-2">
                    <label for="">Contraseña</label>
                    <input required type="password" name="Contraseña" placeholder="Contraseña">
                </div>
                <input type="submit" class="btn btn-success m-2" value="Ingresar" >
                <a href="inser.php" class="btn btn-secundary">Registrate aqui</a>
                    
            </form>    
        </div> 
    </div>
</body>
</html>
<!--
    DB
    nombre sistema
    tabla
    usuarios
        id_user A.I (Auto increment)
        user vc
        apellido vc
        correo vc
        password vc
        rol int
-->