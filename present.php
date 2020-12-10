<?php include("PHP/db.php"); 

if(isset($_GET['Id'])){
    $Id = $_GET['Id'];
    $query = "SELECT * FROM pelis WHERE Id = $Id";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1 ){
        $row = mysqli_fetch_array($result);
     
        $Titulo = $row['titulo'];
        $Año = $row['year'];
        $Genero = $row['genero'];
        $LinkVideo = $row['link'];
        $LinkPortada = $row['link_portada'];
        $descripcion = $row['descripcion'];

    }
}

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <!-- icono de la pagina -->
   <link rel="icon" href="Images/logo2.ico">
    <!-- link de css trailers -->
    <link rel="stylesheet" href="Estilos/PresentacionTrailer.css">
</head>

<body>

    <header>
        <div class="Presentacion">
            <form action="Index.php">
            <button><i class="fas fa-arrow-left"></i></button>
            </form>
        </div>
        <h1><?php echo $row['titulo'] ?></h1>
    </header>

    <section class="Ver-Trailer">
        
        <img  class="fondosqui" src="images/Logomejorado.png" alt="">
        <div class="contenido-Ver-Trailer">
            <div class="contenidoImagen">
                <!-- <img src="https://image.jimcdn.com/app/cms/image/transf/dimension=1920x1024:format=jpg/path/s39145781b4b2fa7a/image/i1ab4ab528d489ab5/version/1485717180/image.jpg" alt=""> -->
                <img src="<?php echo $row['link_portada'] ?>" alt="">
            </div>
            <div class="contenido-descripcion">
                <?php 
                $query = "select * from pelis";
                $result_tab = mysqli_query($conn, $query);

                ?>
                    <!-- <h1>Doctor strange</h1>
                    <h2>Descripcion</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus veniam cum tempore dolore delectus, porro aut itaque nisi eveniet laboriosam facere iusto et inventore consequuntur corrupti saepe maxime ea tempora?</p>
                    <h3><span>Genero:</span> Ciencia ficción</h3>
                    <h3><span>Año:</span> 2017</h3>
                    <h3><span>Calificacion:</span> ------------</h3> -->
                    <h1><?php echo $row['titulo'] ?></h1>
                    <h2>Descripcion</h2>
                    <p><?php echo $row['descripcion'] ?></p>
                    <h3><span>Genero:</span> <?php echo $row['genero'] ?></h3>
                    <h3><span>Año:</span> <?php echo $row['year'] ?></h3>
                    <h3><span>Calificacion:</span> ----- </h3>
                 </tbody>
            </div>
        </div>
    </section>

    <section class="youtube">
        <img src="images/fondoyoutube.png" alt="">
        <div class="contenidoyoutube">
     
                <!-- <iframe width="660" height="415" src="https://www.youtube.com/embed/d5NdyIyBTIs?start=27" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe> -->
                <iframe width="660" height="415" src="https://www.youtube.com/embed/<?php echo $row['link'] ?>" frameborder="0" 
                allowfullscreen></iframe>
        
        </div>
    </section>

    
    <script src="https://kit.fontawesome.com/2e2971d45d.js" crossorigin="anonymous"></script>
</body>

</html>


