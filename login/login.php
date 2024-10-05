<?php
// Rutas de los archivos CSV
$archivoPacientes = 'php_registro_paciente/pacientes.csv';
$archivoPersonal = 'php_registro_personal/personal.csv';

// Verifica que los datos POST existan
if (!isset($_POST['email']) || !isset($_POST['password'])) {
    die("Error: Solicitud no válida.");
}

// Obtener los datos enviados por el formulario
$email = trim($_POST['email']);
$password = trim($_POST['password']);

// Función para verificar credenciales
function verificarCredenciales($archivoCsv, $email, $password) {
    if (!file_exists($archivoCsv)) {
        die("Error: No se encontró el archivo $archivoCsv.");
    }

    // Abrir el archivo CSV para lectura
    if (($archivo = fopen($archivoCsv, 'r')) !== false) {
        while (($datos = fgetcsv($archivo, 1000, ',')) !== false) {
            // Suponiendo que el correo está en la posición 5 y la contraseña en la 6
            if (isset($datos[5]) && isset($datos[6])) {
                if ($datos[5] === $email && password_verify($password, $datos[6])) {
                    fclose($archivo);
                    return true;
                }
            }
        }
        fclose($archivo);
    } else {
        die("Error: No se pudo abrir el archivo $archivoCsv.");
    }
    return false;
}

// Verificar las credenciales en el archivo de pacientes
if (verificarCredenciales($archivoPacientes, $email, $password)) {
    echo 'inicio_paciente/inicio_paciente.html';
} 
// Verificar las credenciales en el archivo de personal
else if (verificarCredenciales($archivoPersonal, $email, $password)) {
    echo 'inicio_personal/inicio_personal.html';
} 
// Si no coincide en ninguno de los dos archivos
else {
    echo 'Correo electrónico o contraseña incorrectos.';
}
?>
