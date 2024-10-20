<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complejo|noticias</title>
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
    </header>  -->
    <?php include('header.php');?>

 
 <!-- Sección de Noticias -->
 <section class="noticias">
        <div class="container">
            <h2>Noticias Recientes</h2>
            <div class="noticia">
                <h3>Título de la noticia 1</h3>
                <p>Resumen o extracto de la noticia 1...</p>
                <a href="#" class="btn">Leer más</a>
            </div>
            <div class="noticia">
                <h3>Título de la noticia 2</h3>
                <p>Resumen o extracto de la noticia 2...</p>
                <a href="#" class="btn">Leer más</a>
            </div>
            <div class="noticia">
                <h3>Título de la noticia 3</h3>
                <p>Resumen o extracto de la noticia 3...</p>
                <a href="#" class="btn">Leer más</a>
            </div>
        </div>
    </section>
    <?php include('footer.php');?>