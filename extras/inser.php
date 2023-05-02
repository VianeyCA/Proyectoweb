<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="css/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
<br><br><br><br><br><br><br><br><br>
    <div class="row align-content-center justify-content-center vh-50">
     <div class="col-auto border rounded p-4"> 
            <form action="insertar.php" method="post"> 
                    <label class="row align-content-center justify-content-center" for="">Ingrese nuevos datos</label>
                        <div class="row align-content-center justify-content-centerform-group m-2">
                            <label for="">Usuario</label>
                            <input type="text" name="user" placeholder="Usuario">
                        </div>

                        <div class="row align-content-center justify-content-center form-group m-2">
                            <label for="">Apellido</label>
                            <input type="text" name="Apellido" placeholder="Apellido">
                        </div>

                        <div class="row align-content-center justify-content-center form-group m-2">
                            <label for="">Correo</label>
                            <input type="email" name="email" placeholder="Correo">
                        </div>

                        <div class="row align-content-center justify-content-center form-group m-2">
                            <label for="">Contraseña</label>
                            <input type="pass" name="pass" placeholder="Contraseña">
                        </div>

                        <div class="row align-content-center form-group m-2">
                            <label for="">Tipo de usuario</label>
                                <select name="rol" id="">
                                    <option value="administrador">Admin</option>
                                    <option value="usuario">Usuario</option>
                                </select>
                        </div>

                        <div>
                            <input type="submit" class="btn btn-warning m-2" value="Insertar">
                        </div>     
            </form>
        </div> 
    </div>
</body>
</html>   