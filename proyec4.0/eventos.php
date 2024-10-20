<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complejo|evento</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Encabezado -->
    <!-- <header>
        <div class="container">
            <div class="logo">
                <img src="img/Screenshot 2024-05-05 224627.png" alt="UNIMET">
            </div>
            <nav>
                <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="noticias.php">Noticias</a></li>
                    <li><a href="eventos.php">Eventos</a></li>
                    <li><a href="post.php">instagram</a></li>
                    <li><a href="calendario.php">Calendario</a></li>
                    <li><a href="login/index.php">Inscribete</a></li>
                </ul>
            </nav>
        </div>
    </header> 
   -->
   <?php include('header.php');?>

  
  <!-- Sección de Agenda de Eventos -->
   <section class="agenda-eventos">
        <div class="container">
            <h2>Agenda de Eventos</h2>
            <div class="evento">
                <h3>Evento 1</h3>
                <p>Fecha: 12 de Octubre de 2024</p>
                <p>Descripción del evento...</p>
            </div>
            <div class="evento">
                <h3>Evento 2</h3>
                <p>Fecha: 15 de Octubre de 2024</p>
                <p>Descripción del evento...</p>
            </div>
            <div class="evento">
                <h3>Evento 3</h3>
                <p>Fecha: 20 de Octubre de 2024</p>
                <p>Descripción del evento...</p>
            </div>
        </div>
    </section>

    <?php include('footer.php');?>