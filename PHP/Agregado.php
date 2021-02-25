<?php
  session_start();

  require 'database.php';

  $message = '';

    if ($_SESSION["user_id"] === null){
        header("Location: login.php");
    }

    if (!empty($_POST['user']) && !empty($_POST['password'])) {
        $sql = "INSERT INTO users (user, password) VALUES (:user, :password)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':user', $_POST['user']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password);

        if ($stmt->execute()) {
            $message = 'Nuevo usuario registrado con exito';
        } else {
            $message = 'Ocurrio un error creando el nuevo usuario';
        }
    }

  if (isset($_SESSION['user_id'])) {
    $records = $conexion->prepare('SELECT id, user, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }

  

?>
<?php include("db.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TraCine</title>

    <!-- icono de la pagina -->
    <link rel="icon" href="Images/logo2.ico">
    <!-- estilos nativos -->
    <link rel="stylesheet" href="../Estilos/Agregado.css">
    <!-- estilos de boostraps -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
</head>

<body>

    <main>
        <header class="menu">
            <div class="cabecera">
                <img src="../images/Logomejorado.png" alt="">
                <div class="otro">
                    <form action="logout.php">
                        <button><i class="fas fa-arrow-left"></i></button>
                    </form>
                    <form action="registro.php">
                        <button class="btnregisss">Registrarse</button>
                    </form>
                </div>
            </div>
        </header>

        <section class="agregar">
            <div class="contenido_formulario">
                <div class="parteizquierda">
                    <div class="titulo_form">
                        <h2>Trailers</h2>
                    </div>
                    <form action="save.php" method="POST">
                        <div class="datos">
                            <div class="p1">
                                <input type="text" name="titulo" placeholder="Titulo" autocomplete="off" class="inputs">
                                <input type="text" name="año" placeholder="Año" autocomplete="off" class="inputs">
                            </div>
                            <div class="p2">
                                <input type="text" name="genero" placeholder="Genero" autocomplete="off" class="inputs">
                                <input type="text" name="link" placeholder="Link" autocomplete="off" class="inputs">
                            </div>
                            <div class="p2">
                                <input type="text" name="link_portada" placeholder="Enlace portada" autocomplete="off"
                                    class="inputsDescription1">
                            </div>

                            <div class="p2">
                                <textarea rows="5" name="descripcion" placeholder="Descripcion"
                                    class="inputsDescription2"></textarea>
                            </div>

                            <div class="p2">
                                <button type="submit" name="save_task" value="Guardar" class="btnagregar">
                                    <i class="fas fa-plus"></i></button>
                                <!-- <input type="submit" name="guardar" value="Guardar" class="btn btn_primary"> -->
                            </div>
                        </div>
                    </form>
                </div>
                <div class="partederecha">
                    <img src="../Images/netflix.png" alt="">
                </div>
            </div>
        </section>


        <section class="Info_bd">
            <div class="contenido_info_bd">
                <h3>Trailers agregados</h3>
      
                <div class="tablabd">

                    <!-- table table-striped table-dark table-hover -->
                    <table class="estilotabla">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Titulo</th>
                                <th>Año</th>
                                <th>Genero</th>
                                <th>link</th>
                                <th>Portada</th>
                                <th>Descripcion</th>
                                <th class="limiteopcions"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                         
                        
                            $query = "select * from pelis";
                        
                            $result_tab = mysqli_query($conn, $query);
                            
                            while ($row = mysqli_fetch_array($result_tab)){
                            ?>
                            <tr>
                                <th>
                                    <?php echo $row['Id'] ?>
                                </th>
                                <th>
                                    <?php echo $row['titulo'] ?>
                                </th>
                                <th>
                                    <?php echo $row['year'] ?>
                                </th>
                                <th>
                                    <?php echo $row['genero'] ?>
                                </th>
                                <th>
                                    <?php echo $row['link'] ?>
                                </th>
                                <th><img src="<?php echo $row['link_portada'] ?>" alt=""></th>
                                <th id="thdescripcion">
                                    <?php echo $row['descripcion'] ?>
                                </th>

                                <th>
                                    <a href="delete.php?Id= <?php echo $row['Id'] ?>"><button
                                            class="btns btnseliminar"><i class="fas fa-minus-circle"></i></button></a>
                                    <a href="edit.php?Id= <?php echo $row['Id'] ?>"><button class="btns btnseditar"><i
                                                class="far fa-edit"></i></button></a>
                                </th>

                            </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section class="Cine-Master">
            <div class="contenido-cinemaster">
                <div class="cine1">
                    <img src="../Images/netflix.png" alt="">
                </div>
                <div class="cine2">
                    <h2>Agregado de trailers</h2>
                </div>
            </div>
        </section>
    </main>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script> -->
    <script src="https://kit.fontawesome.com/2e2971d45d.js" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>

</html>

<?php

// prueba

// include_once 'database.php';

// if(isset($_POST['guardar'])){
//   $titulo=$_POST['Titulo'];
//   $año=$_POST['Año'];
//   $genero=$_POST['Genero'];
//   $linkvideo=$_POST['LinkVideo'];
//   $linkportada=$_POST['LinkPortada'];
//   $descripcion=$_POST['Descripcion'];

//       /*if(empty($titulo) && empty($año) && empty($genero) && empty($linkvideo) && empty($linkportada) && empty($descripcion) )
//       {
//           echo "<script> alert('Los campos estan vacios');</script>";
//       }
//       else{*/
//           $consulta_insert=$con->prepare('INSERT INTO peliculas(Titulo,Año,Genero,LinkVideo,Linkportada,Descripcion) VALUES(:Titulo,:Año,:Genero,:LinkVideo,:LinkPortada,:Descripcion)');
//           $consulta_insert->execute(array(
//               ':Titulo' =>$titulo,
//               ':Año' =>$año,
//               ':Genero' =>$genero,
//               ':LinkVideo' =>$linkvideo,
//               ':LinkPortada' =>$linkportada,
//               ':Descripcion' =>$descripcion
//           ));
//           header('Location: Agregado.php');
//       //}


// }

?>