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


                    <div class="row align-content-center justify-content-center form-group m-2">
                            <label for="">Matricula</label>
                            <input required type="number" name="Matricula" placeholder="Matricula">
                        </div>


                        <div class="row align-content-center justify-content-centerform-group m-2">
                            <label for="">Usuario</label>
                            <input required type="text" name="Nombre_Completo" placeholder="Usuario">
                        </div>

                        <div class="row align-content-center justify-content-center form-group m-2">
                            <label for="">Correo</label>
                            <input required type="email" name="Correo" placeholder="Correo">
                        </div>


                        <div  class="row align-content-center form-group m-2">
                            <label for="">Estado</label>
                                <select name="Estado" id="">
                                    <option >Base</option>
                                    <option >Honorarios</option>
                                </select>
                        </div>

                        <div class="row align-content-center justify-content-center form-group m-2">
                            <label for="">Contraseña</label>
                            <input required type="password" name="Contraseña" placeholder="Contraseña">
                        </div>
<!-- hidden va en el div de tipo de usuario-->
                        <div hidden class="row align-content-center form-group m-2">
                            <label for="">Tipo de usuario</label>
                                <select name="rol" id="">
                                    <option >Docente</option>
                                    <option >administrador</option>
                                </select>
                        </div>


                        <div>
                            <input type="submit" class="btn btn-success m-2" value="Registrar">
                            <a href="index.php" class="btn btn-danger">Regresar</a>
                        </div>     
            </form>
        </div> 
    </div>
</body>
</html>   