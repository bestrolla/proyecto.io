


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complejo | recuperacion</title>
    <link rel="stylesheet" href="/ModeloM/inscrip/visula/css/style.css">
    <!-- <link rel="stylesheet" href="../styles.css"> -->
    
    <?php include('../../../recursos/html/head.php');?>
</head>

<body> 
<?php include('../../../recursos/html/header.php');?>
<section class="fondo">
    <div class="login-contenedor" id="recup-contenedor">
        <h1>Recuperación de Contraseña</h1>
        <form action="/ModeloM/inscrip/logica/recup.php" method="post" id="recup-form">
            <label for="recup-usu">Usuario</label>
            <input type="text" id="recup-usu" name="recup_usu" required>
            <label for="recup-correo">Correo electrónico</label>
            <input type="imail" id="recup-correo" name="recup_correo" required>
            <div class="bonton-ins">
                 <button id="ins" type="submit">Enviar</button>
            </div>
        </form>

        <div  class="volver" >
            <a id="" href="/ModeloM/inscrip/visula/html/inscrip.php" >Volver</a>
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
<?php include('../../../recursos/html/footer.php'); ?>
<script src="ScriptRegis.js"></script>  

</body>
</html>