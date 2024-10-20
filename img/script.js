document.addEventListener('DOMContentLoaded', function () {
  const insButton = document.getElementById('ins');
  const inscripcion = document.getElementById('estudiante-form-cotenedor');

  if (insButton && inscripcion) {
    insButton.addEventListener('click', function () {
      inscripcion.classList.toggle('activa');
    });
  } else {
    console.error('No se encontraron los elementos necesarios.');
  }
});


$(document).ready(function () {
  $('#ins').click(function () {
    $('#estudiante-form-contenedor').slideToggle(500); // Efecto deslizante
  });
});
