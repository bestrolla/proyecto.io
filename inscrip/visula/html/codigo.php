<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complejo | recuperacion</title>
    <!-- <link rel="stylesheet" href="/ModeloM/inscrip/visula/css/codigo.css"> -->
    <link rel="stylesheet" href="/ModeloM/inscrip/visula/css/style.css">    
    <?php include('../../../recursos/html/head.php');?> 
</head>

<body> 
    
   
     <?php include('../../../recursos/html/header.php'); ?> 
<section class="fondo">
    <div class="login-contenedor" id="login-contenedor">
          <h1>Ingresa el codigo de seguridad</h1>
        <div class="contenedor-code">
         <div class="casilla-digito"><input   type="text"maxlength="1"  oninput="this.value = this.value.replace(/[^0-9]/g, '')" style="text-align: center; ; "  ></div>
         <div class="casilla-digito"><input   type="text"maxlength="1"  oninput="this.value = this.value.replace(/[^0-9]/g, '')" style="text-align: center; ; "  ></div>
         <div class="casilla-digito"><input  type="text" maxlength="1"  oninput="this.value = this.value.replace(/[^0-9]/g, '')" style="text-align: center; ; "  ></div>
         <div class="casilla-digito"><input  type="text" maxlength="1"  oninput="this.value = this.value.replace(/[^0-9]/g, '')" style="text-align: center; ; "  ></div>

        </div>
        
        <button class="boton-code" type="submit">Enviar</button> 
       <br>
       <br>

        <div class="volver">
            <a >Volver</a>
        </div>
    </div>
</section>


    

    <!-- <?php include('../../../recursos/html/footer.php'); ?> -->

    <script src="script.js"></script>
</body>
</html>

