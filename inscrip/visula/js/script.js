document.addEventListener('DOMContentLoaded', () => {
    const loginContainer = document.getElementById('login-contenedor');
    const registrationContainer = document.getElementById('estudiante-form-contenedor');
    const insButton = document.getElementById('ins');
    const registrationForm = document.getElementById('estudiante-form');
    const passwordInput = document.getElementById('contraseña');
    const confirmPasswordInput = document.getElementById('repetir-contraseña');

    // Mostrar el formulario de inscripción y ocultar el de inicio de sesión
    insButton.addEventListener('click', () => {
        loginContainer.style.display = 'none';  // Ocultar login
        registrationContainer.classList.add('mostrar'); // Mostrar inscripción
    });

    // Validar las contraseñas al enviar el formulario
    registrationForm.addEventListener('submit', (e) => {
        if (passwordInput.value !== confirmPasswordInput.value) {
            e.preventDefault();
            alert('Las contraseñas no coinciden. Inténtalo de nuevo.');
        }
    });
});
