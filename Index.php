<?php include("php/db.php")?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TraCine</title>

    <!-- icono de la pagina -->
    <link rel="icon" href="Images/logo2.ico">

    <!-- Estilos css principal -->
    <link rel="stylesheet" href="Estilos/Estilos.css">
    <link rel="stylesheet" href="Estilos/Index-Footer.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <!-- agregado -->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />

    

</head>

<body>

    <header>
        <div id="inicio" class="cabecera Contenedor ">
            <div class="ParteLogo " >
                <img class="ImgLogo" src="Images/Logomejorado.png" alt="">
                <h1>TraCine</h1>
            </div>
            <div class="ParteAdministrar">
                <a href="#inicio" class="menu" >Inicio</a>
                <a href="#pie" class="menu">Sobre nosotros</a>
                <a href="PHP/Login.php"><i class="Admin fas fa-users-cog"></i></a>
            </div>
        </div>

        <div class= "loog Contenedor">
            <img src="Images\logomejorado.png" alt="">
        </div>

    </header>



    <div class="contenido">
        <div class="titulo">
            <h1>Trailers</h1>
        </div>
        <section class="Tarjetas">
            <?php 
            $query = "select link_portada, Id from pelis";
            $result_tab = mysqli_query($conn, $query);
         

           
            while ( $row = mysqli_fetch_array($result_tab) ){
            
            ?>
                
                <div class="tarjeta">
                <!-- <h3>Nuevo</h3> -->
                <a href="present.php?Id=<?php echo $row['Id']?>">
                <img src="<?php echo $row['link_portada'] ?>"  alt="">
                </a>
            </div>
            <?php   } ?> </tbody>


        
        </section>

    </div>

    <div class="paginacion">
        <div class="contenido-paginacion">
            <a href="" class="pagarrow"><i class="fas fa-arrow-left"></i></a>
            <a href="" class="pag">1</a>
            <a href="" class="pag">2</a>
            <a href="" class="pag">3</a>
            <a href="" class="pag">4</a>
            <a href="" class="pag">5</a>
            <a href="" class="pag">6</a>
            <a href="" class="pag">7</a>
            <a href="" class="pag">...</a>
            <a href="" class="pagarrow"><i class="fas fa-arrow-right"></i></a>
        </div>
    </div>

    <footer class="pie" id="pie">
        <div class="Contenido-Pie Contenedor">
            <div class="Info">
                <h3>The best page to watch trailers</h3>
                <h4>Nosotros somos un grupo del instituto tecnologico de las americas dirigido por el profesor Luis Soto.
                </h4>


            </div>
            <div class="icons">
                <a href=""> <i class="bx bxl-facebook"></i></a>
                <a href=""> <i class="bx bxl-twitter"> </i></a>
                <a href=""> <i class="bx bxl-instagram"></i></a>
                <a href=""> <i class="bx bxl-whatsapp"></i></a>
            </div>


        </div>
        <div class="creadores Contenedor">
            <div class="contenidoimg">
                <img src="Images/photorody.jpg" alt="">
                <h2>Rody</h2>
                <h3>2018-6753</h3>
            </div>
            <div class="contenidoimg">
                <img src="Images/photoherman.jpg" alt="">
                <h2>Herman</h2>
                <h3>2018-6889</h3>
            </div>
            <div class="contenidoimg">
                <img src="Images/photojuan.jpg" alt="">
                <h2>Juan Ricardo</h2>
                <h3>2018-6155</h3>
            </div>
        </div>
        <div class="copyright ">
            <h5>&copy;Todos los derechos reservados</h5>
        </div>
    </footer>
    
    <script src="https://kit.fontawesome.com/2e2971d45d.js" crossorigin="anonymous"></script>
    


</body>

</html>