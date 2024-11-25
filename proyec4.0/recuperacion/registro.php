<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complejo | recuperacion</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="../styles.css"> -->
    
    <?php include('../head.php');?>
</head>

<body> 
<header>
            <div class="container">       
            <div class="logo">
                <img src="img/logo.jpg" alt="UNIMET"  height="75px " width="75px"  >
            </div>

            <nav>
                <ul>
                    <li><a href="../index.php">Inicio</a></li>
                    <!-- <li><a href="Cursos.php">Cursos</a></li> -->
                    <li><a href="../calendario_admin.php">Eventos</a></li>
                    <li><a href="instagram/feed.php">instagram</a></li>
                    <li><a href="../calendario.php">Calendario</a></li>
                    <!-- <li><a href="agenda.php">agenda</a></li> -->
                    <li><a href="../inscrip.php">Inscribete</a></li>
                </ul>
            </nav>
        </div>
        </header>
   

<section class="fondo">
    <div class="login-contenedor" id="recup-contenedor">
        <h1>Recuperación de Contraseña</h1>
        <form action="recup.php" method="post" id="recup-form">
            <label for="recup-usu">Usuario</label>
            <input type="text" id="recup-usu" name="recup_usu" required>

            <label for="recup-correo">Correo electrónico</label>
            <input type="text" id="recup-correo" name="recup_correo" required>
            <div class="bonton-ins">
            <button id="ins" type="submit">Enviar</button>
            </div>
        </form>

        <div class="">
            <button id="">Volver</button>
        </div>
    </div>

            <div class="inscrip" id="recup-form-contenedor">
                <h1>Recuperación de Contraseña</h1>
                <form action="recup.php" method="post" id="recup-form-conatainer">
                    <label for="recup-contraseña">Ingrese su nueva contraseña</label>
            <input type="password" id="recup-contraseña" name="recup_contraseña" required>

            <label for="recup-contraseña">Ingrese nuevamente su contraseña</label>
            <input type="password" id="recup-contraseña" name="recup_contraseña" required>
            
            <button type="submit">Restablecer contraseña</button>
        </form>
        
    </div>
</section>
<script src="ScriptRegis.js"></script>
<?php include('../footer.php'); ?>

</body>
</html>