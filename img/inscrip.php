<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complejo|inscripcion</title>
    <link rel="stylesheet" href="stylesLogin.css" type="text/css">
    <style>
      @import url(stylesLogin.css);
    </style>
</head>
<body> 
    <?php include('header.php');?>

    <div class="login-contenedor">
        <h1>inicio de sesion</h1>
        <form action="" method="post" id="login-form">
            <label for="">nombre</label>
            <input type="text">
            <label for="">contraceña</label>
            <input type="password">
            <button type="submit">iniciar sesion</button>
        </form>
        <div class="boton-ins">
            <button id="ins">inscribete</button>
        </div>
    </div>

    <div class="inscrip" id="estudiante-form-cotenedor">
        <h2>inscripcion</h2>
        <form action="" method="post" id="estudiante-form">
            <label for="">nombre</label>
            <input type="text">
            <label for="">apellido</label>
            <input type="text">
            <label for="">cedula</label>
            <input type="number">
            <label for="">correo electronico</label>
            <input type="email">
            <label for="">contraceña</label>
            <input type="password">
            <label for="">repetir contraceña</label>
            <input type="password">
            <button type="submit">registrarse</button>
        </form>
    </div>

    <?php include('footer.php');?>

    <script>
      document.getElementById('ins').addEventListener('click', function () {
        const inscripcion = document.getElementById('estudiante-form-cotenedor');
        inscripcion.classList.toggle('activa');
      });
    </script>
</body>
</html>
