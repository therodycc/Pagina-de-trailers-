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
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!-- icono de la pagina -->
    <link rel="icon" href="../Images/logo2.ico">
    <!-- css  -->
    <link rel="stylesheet" href="../Estilos/Administracion.css">
    <link rel="stylesheet" href="../Estilos/registro.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

    <!--font icons-->
    <script src="https://kit.fontawesome.com/2e2971d45d.js" crossorigin="anonymous"></script>
</head>

<body>
    <main>
    <form action="Agregado.php">
            <button class="iconoatras"><i class="fas fa-arrow-left"></i></button>
        </form>


        <section class="principal">
            <div class="seccion1">
                <div class="texto">
                    <img src="..\Images\registroo.png" alt="" srcset="">
                </div>
            </div>

            <div class="seccion2">
                <?php if(!empty($message)): ?>
                    <?php echo "<script type='text/javascript'>alert('$message');</script>"; ?>
                <?php endif; ?>
                <img class="fondosqui" src="../Images/Logomejorado.png" alt="">
                <div class="login">

                    <form action="registro.php" method="POST">
                        <h2>Registro</h2>
                        <div class="textbox">
                            <i class="fas fa-user"></i>
                            <input type="text" name="user" placeholder="Usuario">
                        </div>

                        <div class="textbox">
                            <i class="fas fa-key"></i>
                            <input type="password" name="password" placeholder="Contraseña">
                        </div>

                        <input type="submit" class="btn" value="Registrarse">
                    </form>
                </div>
            </div>
        </section>

    </main>

</body>

</html>