<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="styles.css">
    <!-- <link rel="stylesheet" href="../styles.css"> -->
</head>

<body>

     <!-- Encabezado -->
    <header>
        <div class="header">
            <div class="logo">
                <img src="../img/Screenshot 2024-05-05 224627.png" alt="UNIMET">
            </div>
            <nav>
                <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="../noticias.php">Noticias</a></li>
                    <li><a href="../eventos.php">Eventos</a></li>
                    <li><a href="../post.php">instagram</a></li>
                    <li><a href="../calendario.php">Calendario</a></li>
                    <li><a href="../inscrip.php">Inscribete</a></li>
                </ul>
            </nav>
        </div>
    </header>  
    
    <div class="login-container" id="login-container">
        <h1>Iniciar Sesión</h1>
        <form id="login-form" action="login.php" method="post">
            <label for="email" class="required">Correo Electrónico</label>
            <input type="email" id="email" name="email" required>
            <label for="password" class="required">Contraseña</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" class="botom">Iniciar Sesión</button>
        </form>
        <div class="login-options">
            <button id="paciente-login">Registrarse como Paciente</button>
            <button id="personal-login">Registrarse como Personal</button>
        </div>
    </div>

    <div id="paciente-form-container" class="form-container paciente-form-container" style="display: none;">
        <h2>Registro de Paciente</h2>
        <form id="paciente-form" action="php_registro_paciente/registro_paciente.php" method="post">
            <label for="nombre" class="required">Nombre</label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="apellido" class="required">Apellido</label>
            <input type="text" id="apellido" name="apellido" required>
            <label for="cedula" class="required">Cédula</label>
            <input type="text" id="cedula" name="cedula" required>
            <div class="flex-container">
                <div class="flex-item">
                    <label for="fecha-nacimiento" class="required">Fecha de Nacimiento</label>
                    <input type="date" id="fecha-nacimiento" name="fecha-nacimiento" required>
                </div>
                <div class="flex-item">
                    <label for="sexo" class="required">Sexo</label>
                    <select id="sexo" name="sexo" required>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                    </select>
                </div>
            </div>
            <label for="email-paciente" class="required">Correo Electrónico</label>
            <input type="email" id="email-paciente" name="email-paciente" required>
            <div class="flex-container">
                <div class="flex-item">
                    <label for="password-paciente" class="required">Contraseña</label>
                    <input type="password" id="password-paciente" name="password-paciente" required>
                </div>
                <div class="flex-item">
                    <label for="repetir-password" class="required">Repetir Contraseña</label>
                    <input type="password" id="repetir-password" name="repetir-password" required>
                </div>
            </div>
            <button type="submit">Registrarse</button>
        </form>
    </div>

    <div id="personal-form-container" class="form-container personal-form-container" style="display: none;">
        <h2>Registro de Personal</h2>
        <form id="personal-form" action="php_registro_personal/registro_personal.php" method="POST">
            <label for="tipo-personal" class="required">Tipo de Personal</label>
            <select id="tipo-personal" name="tipo-personal" required>
                <option value="">Seleccionar</option>
                <option value="doctor">Doctor</option>
                <option value="enfermero">Enfermero</option>
            </select>

            <div id="doctor-fields" style="display: none;">
                <label for="nombre-personal" class="required">Nombre</label>
                <input type="text" id="nombre-personal" name="nombre-personal" required>
                <label for="apellido-personal" class="required">Apellido</label>
                <input type="text" id="apellido-personal" name="apellido-personal" required>
                <label for="especialidad" class="required">Especialidad</label>
                <input type="text" id="especialidad" name="especialidad" required>
                <label for="email-doctor" class="required">Correo Electrónico</label>
                <input type="email" id="email-doctor" name="email-doctor" required>

                <div class="flex-container">
                    <div class="flex-item">
                        <button type="button" class="toggle-btn" data-target="turno">Turno</button>
                        <div id="turno" class="collapsible-content" style="display: none;">
                            <label><input type="checkbox" name="turno[]" value="mañana"> Mañana</label>
                            <label><input type="checkbox" name="turno[]" value="tarde"> Tarde</label>
                            <label><input type="checkbox" name="turno[]" value="noche"> Noche</label>
                            <label><input type="checkbox" name="turno[]" value="madrugada"> Madrugada</label>
                        </div>
                    </div>
                    <div class="flex-item">
                        <button type="button" class="toggle-btn" data-target="disponibilidad">Disponibilidad</button>
                        <div id="disponibilidad" class="collapsible-content" style="display: none;">
                            <label><input type="checkbox" name="disponibilidad[]" value="lunes"> Lunes</label>
                            <label><input type="checkbox" name="disponibilidad[]" value="martes"> Martes</label>
                            <label><input type="checkbox" name="disponibilidad[]" value="miércoles"> Miércoles</label>
                            <label><input type="checkbox" name="disponibilidad[]" value="jueves"> Jueves</label>
                            <label><input type="checkbox" name="disponibilidad[]" value="viernes"> Viernes</label>
                            <label><input type="checkbox" name="disponibilidad[]" value="sábado"> Sábado</label>
                            <label><input type="checkbox" name="disponibilidad[]" value="domingo"> Domingo</label>
                        </div>
                    </div>
                    <div class="flex-item">
                        <input type="number" id="cantidad-pacientes" name="cantidad-pacientes" placeholder="Cantidad de Pacientes" required max="10" min="0">
                    </div>
                </div>
            </div>

            <div id="enfermero-fields" style="display: none;">
                <label for="nombre-enfermero" class="required">Nombre</label>
                <input type="text" id="nombre-enfermero" name="nombre-enfermero" placeholder="Nombre" required>
                <label for="apellido-enfermero" class="required">Apellido</label>
                <input type="text" id="apellido-enfermero" name="apellido-enfermero" placeholder="Apellido" required>
                <label for="email-enfermero" class="required">Correo Electrónico</label>
                <input type="email" id="email-enfermero" name="email-enfermero" placeholder="Correo Electrónico" required>
            </div>

            <button type="submit">Registrarse</button>
        </form>
    </div>

    <script src="script.js"></script>
    <script src="formmulario_paciente.js"></script>
    <script src="formulario_personal.js"></script>
</body>
</html>
