<?php
    session_start();

    require 'database.php';

    
    if (!empty($_POST['user']) && !empty($_POST['password'])) {
        $records = $conexion->prepare('SELECT id, user, password FROM users WHERE user = :user');
        $records->bindParam(':user', $_POST['user']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
    
        $message = '';
        
        if (password_verify($_POST['password'], $results['password']) > 0 && count($results)) {
          $_SESSION['user_id'] = $results['id'];
          header("Location: Agregado.php");
        } else {
          $message = 'Credenciales erroneas.';
        }
    }
    
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- icono de la pagina -->
    <link rel="icon" href="../Images/logo2.ico">
    <!-- css  -->
    <link rel="stylesheet" href="../Estilos/Administracion.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <!--font icons-->
    <script src="https://kit.fontawesome.com/2e2971d45d.js" crossorigin="anonymous"></script>
</head>

<body>
    <main>
        <form action="../Index.php">
            <button class="iconoatras"><i class="fas fa-arrow-left"></i></button>
        </form>


        <!-- <img class="fondosqui" src="../Images/Logomejorado.png" alt=""> -->

        <section class="principal">
            <div class="seccion1">
                <div class="texto">
                    <img src="../Images/iniciologin.png" alt="" srcset="">
                </div>
            </div>




            <div class="seccion2">
                <?php if(!empty($message)): ?>
                    <?php echo "<script type='text/javascript'>alert('$message');</script>"; ?>
                <?php endif; ?>
                    <img class="fondosqui" src="../Images/Logomejorado.png" alt="">
                <div class="login">
                    
                    <form action="login.php" method="post">
                        <h2>Login</h2>
                        <div class="textbox">
                            <i class="fas fa-user"></i>
                            <input type="text" name="user" placeholder="Usuario" autocomplete="off">
                        </div>

                        <div class="textbox">
                            <i class="fas fa-key"></i>
                            <input type="password" name="password" placeholder="Contraseña">
                        </div>
                        <input type="submit" class="btn" value="Iniciar Sesion">
                    </form>
                </div>
            </div>


        </section>
        </div>
    </main>

</body>

</html>