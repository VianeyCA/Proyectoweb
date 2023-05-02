<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../js/script.js">
    <link rel="stylesheet" href="../../css/popup.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div>
<nav style="display:block ;" class="menu1">
         <section class="menu_container">

             <div class="">
            <img src="../../img/img_itc.png" class="img1">
            <label class="titulo1">Tecnologico Nacional De Mexico</label>
            
            <label class="titulo1">Instituto Tecnologico De Cuautula</label>
            <img src="../../img/LOGO-VERTICAL-TECNM.png" class="img2">
        </div>
        </section>
</nav>

</div>
  <nav style="display:block ;" class="menu">
         
        </div>


<!-- menu -->
            <ul class="menu_links">
                <li class="menu_item">
                    <a href="index2.php" class="menu_link">Inicio</a>
                </li>

                <li class="menu_item">
                    <a href="../Alumnos/Alumnos.php" class="menu_link">Alumnos</a>
                </li>

                <li class="menu_item">
                    <a href="ActEsc.php" class="menu_link">Actividades Escolares</a>
                </li>
                
                <li class="menu_item">
       <a href="../../index.php" class="menu_link ">Sesión</a>

       
   </li>
                
   
   <li  class="menu_item menu_link menu_link--inside"  style="padding: 33px;">
       <?php
        session_start();
        if(isset($_SESSION["Nombre_Completo"])){
            print $_SESSION["Nombre_Completo"];
            print " <ul class='menu_nesting'> <li class='menu_inside' style='padding: 33px;' >
            <a href='../../cerrar.php'>Cerrar sesión</a>
        </li> 
        </ul>";
        }
       ?>
   </li>
   
 </ul>

<div class="menu_hamburguer">
    <img src="assets/menu.svg" class="menu_img">
</div>  
 </section>

</nav>
  <!-- fin de menu -->      
  <script src="js/app.js"></script>
<script src="js/script.js"></script>
<!-- lo que quiera agregar se pone de bajo del inicio de sesion, si no no lo agarra -->


 <!--inicio popup
<div style="position:absolute ;" class="popup">
        <button id="close">&times;</button>
        <h2>Ofertas de fin de año</h2>


        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/img1.jpg" width="20" height="300" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/img2.jpg" width="20" height="300" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/img3.jpg" width="20" height="300" alt="Third slide">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="img/descuentos/descuentos1.jpg" width="20" height="300" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/descuentos/descuentos2.jpg" width="20" height="300" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/descuentos/descuentos3.jpg" width="20" height="300" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/descuentos/descuentos4.jpg" width="20" height="300" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/descuentos/descuentos5.jpg" width="20" height="300" alt="Third slide">
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><br><br>
      
      <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
      <script type="text/javascript" src="js/popper.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/script.js"></script>


        <p>Si eres nuevo registrate y obten un 20% de descuento adicional en tu primera compra...</p>
        <a href="inser.php">Registrarme</a>  <a href="index1.php">Iniciar sesion</a>
    </div>
    Script
    <script type="text/javascript">
window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.querySelector(".popup").style.display = "block";
        },
        2000 
    )
});


document.querySelector("#close").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "none";
});
    </script>
fin popup -->
    
<div >



        <!-- imagen muestra 2 -->
        <div>
        <?php 
require_once('../../conexion.php');

?>

    <ul style="color: white ; padding: 20px ;" class="tula">
    

        <?php 
        $query=mysqli_query($con, "SELECT * FROM videojuegos");
        $result=mysqli_num_rows($query);
        if($result>0){
            while($data = mysqli_fetch_array($query)){
                ?>
                     <li class="tula">
                        <img width="225px" height="250px" src="data:image/jpg;base64,<?php echo base64_encode($data['imagen']) ?>" alt="">
                    <br><br>

                         <?php echo $data['nombre'] ?> 
                    <br><hr>
                        
                            <label for="">Descripcion:</label>   <br>
                                <?php echo $data['descripcion'] ?>
                    <br>
                    <div>
                    <button class="m-5" >Comprar</button>
                     
                    </div>                            
                        </li>
                        
                <?php
            }
        }
        ?>
        
    </ul>
        </div>
    
<!-- fin de imagen 2 -->

</div>

  <!--::::Pie de Pagina::::::-->
  <footer class="pie-pagina">
    <div class="grupo-1">
        <div class="box">
            <figure>
                <a href="#">
                    <img src="img/Logo.jpg.png" alt="Logo de SLee Dw">
                </a>
            </figure>
        </div>
        <div class="box">
            <h2>SOBRE NOSOTROS</h2>
            <t style="color: white;" xml:lang="es">
   Somos una empresa que se dedica al el bienestrar de la eleccion del consumidor
   dependiendo de sus gustos, asi mismo, nos preocupamos par la cartera del consumidor,
   tenemos rebajas todo el año y aun ams rebajas dependiendo de el dia que se presente.
</t>
        </div>
        <div class="box">
            <h2>SIGUENOS</h2>
            <div class="red-social">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-youtube"></a>
            </div>
        </div>
    </div>
    <div class="grupo-2">
        <small>&copy; 2022 <b>E-rik Gaming</b> - Todos los Derechos Reservados.</small>
    </div>
</footer>
</body>
</html>