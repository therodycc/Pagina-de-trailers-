<?php 
    include("db.php");

    if (isset($_POST['save_task'])){

        $Titulo = $_POST['titulo'];
        $Año = $_POST['año'];
        $Genero = $_POST['genero'];
        $LinkVideo = $_POST['link'];
        $LinkPortada = $_POST['link_portada'];
        $descripcion = $_POST['descripcion'];

        $query = "insert into pelis(titulo,year, genero, link, link_portada, descripcion) values('$Titulo','$Año','$Genero','$LinkVideo','$LinkPortada','$descripcion')";


        $result = mysqli_query($conn, $query);

          if (!$result){
             die("Query fail");
          }

            


        //  header("location: index2.php");
         
         header("location: Agregado.php" );
    }



?>