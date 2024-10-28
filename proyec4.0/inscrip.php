<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complejo | Inscripción</title>
    <link rel="stylesheet" href="stylesLogin.css">
    <?php include('head.php');?>
</head>
<body> 
    <?php include('header.php'); ?>

    <div class="login-contenedor" id="login-contenedor">
        <h1>Inicio de sesión</h1>
        <form action="login.php" method="post" id="login-form">
            <label for="login-nombre">Nombre</label>
            <input type="text" id="login-nombre" name="login_nombre" required>

            <label for="login-contraseña">Contraseña</label>
            <input type="password" id="login-contraseña" name="login_contraseña" required>

            <button type="submit">Iniciar sesión</button>
        </form>

        <div class="boton-ins">
            <button id="ins">Inscríbete</button>
        </div>
    </div>

    <div class="inscrip" id="estudiante-form-contenedor">
        <h2>Inscripción</h2>
        <form action="register.php" method="post" id="estudiante-form">
    <div class="nombre-apellido-contenedor">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>

        <div>
            <label for="apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido" required>
        </div>
    </div>

    <div class="cedula-correo-contenedor">
        <div>
            <label for="cedula">Cédula</label>
            <input type="number" id="cedula" name="cedula" required>
        </div>

        <div>
            <label for="correo">Correo electrónico</label>
            <input type="email" id="correo" name="correo" required>
        </div>
    </div>

    <label for="contraseña">Contraseña</label>
    <input type="password" id="contraseña" name="contraseña" required>

    <label for="repetir-contraseña">Repetir Contraseña</label>
    <input type="password" id="repetir-contraseña" name="repetir_contraseña" required>

    <button type="submit" class="regis">Registrarse</button>
</form>

    </div>

    <?php include('footer.php'); ?>

    <script src="script.js"></script>
</body>
</html>
