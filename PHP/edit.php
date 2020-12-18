<?php 

include("db.php");

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


if (isset($_POST['update'])){
    $Id = $_GET['Id'];
    $Titulo = $_POST['titulo'];
    $Año = $_POST['año'];
    $Genero = $_POST['genero'];
    $LinkVideo = $_POST['link'];
    $LinkPortada = $_POST['link_portada'];
    $descripcion = $_POST['descripcion'];

    $query = "UPDATE pelis SET titulo = ' $Titulo', year = '$Año', genero = '$Genero', link = '$LinkVideo',link_portada = '$LinkPortada', descripcion= '$descripcion' WHERE Id = '$Id' ";
    mysqli_query($conn,$query);

    echo 'actualizado';
    header("location: Agregado.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- <link rel="stylesheet" href="../Estilos/Agregado.css"> -->
    <link rel="stylesheet" href="../Estilos/otro.css" />
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <form action="Agregado.php">
        <button class="btnatras"><i class="fas fa-arrow-left"></i></button>
    </form>
    <form action="edit.php?Id= <?php echo $_GET['Id'] ?>" method="POST">
        <div class="otro">
            <h5>Titulo</h5>
            <input class="inputssss" type="text" name="titulo" value="<?php echo $Titulo?>" autocomplete="off"
                class="inputs" placeholder="Titulo" />
            <h5>Año</h5>
            <input class="inputssss" type="text" name="año" value="<?php echo $Año?> " autocomplete="off" class="inputs"
                placeholder="Año" />

            <h5>Genero</h5>
            <input class="inputssss" type="text" name="genero" value="<?php echo $Genero?> " autocomplete="off"
                class="inputs" placeholder="Genero" />
            <h5>Link del video</h5>
            <input class="inputssss" type="text" name="link" value="<?php echo $LinkVideo?>" pautocomplete="off"
                class="inputs" placeholder="Link" />

            <h5>Link de la portada</h5>
            <input class="inputssss" type="text" name="link_portada" value="<?php echo $LinkPortada?> "
                autocomplete="off" class="inputs" placeholder="link portada" />
            <h5>Descripcion</h5>
            <textarea type="text" name="descripcion" value="<?php echo $descripcion?>" pautocomplete="off"
                class="inputssss" placeholder="Descripcion" rows="9"><?php echo $descripcion; ?></textarea>

                <button type="submit" name="update" value="Guardar" class="botonguardar">Guardar</button>

        </div>
    </form>
    <script src="https://kit.fontawesome.com/2e2971d45d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
</body>

</html>