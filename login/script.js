document.addEventListener('DOMContentLoaded', function() {
    // Manejo del envío del formulario de inicio de sesión
    document.getElementById('login-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevenir el envío automático del formulario

        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        if (!email || !password) {
            alert('Por favor, complete todos los campos.');
            return;
        }

        // Simular la verificación de datos (simulando PHP)
        const pacienteData = JSON.parse(localStorage.getItem('pacienteData'));
        const doctorData = JSON.parse(localStorage.getItem('doctorData'));
        const enfermeroData = JSON.parse(localStorage.getItem('enfermeroData'));

        if ((pacienteData && pacienteData.email === email && pacienteData.password === password) ||
            (doctorData && doctorData.email === email) ||
            (enfermeroData && enfermeroData.email === email)) {
            alert('Inicio de sesión exitoso');
            window.location.href = 'pagina_destino.html'; // Redirigir a la página de destino
        } else {
            alert('Credenciales incorrectas');
        }
    });
});
// script.js

document.addEventListener('DOMContentLoaded', function() {
    const pacienteLoginBtn = document.getElementById('paciente-login');
    const personalLoginBtn = document.getElementById('personal-login');
    const loginForm = document.getElementById('login-form');

    // Agregar eventos a los botones de registro
    pacienteLoginBtn.addEventListener('click', function() {
        // Lógica para redirigir al registro de pacientes
        window.location.href = 'registro_paciente.html'; // Cambia esta URL según tu configuración
    });

    personalLoginBtn.addEventListener('click', function() {
        // Lógica para redirigir al registro de personal
        window.location.href = 'registro_personal.html'; // Cambia esta URL según tu configuración
    });

    // Validación de formulario
    loginForm.addEventListener('submit', function(event) {
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        // Aquí puedes agregar más lógica de validación si es necesario

        if (!validateEmail(email)) {
            alert('Por favor, ingrese un correo electrónico válido.');
            event.preventDefault(); // Evitar el envío del formulario
        }

        if (password.length < 6) {
            alert('La contraseña debe tener al menos 6 caracteres.');
            event.preventDefault(); // Evitar el envío del formulario
        }
    });

    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(String(email).toLowerCase());
    }
});
