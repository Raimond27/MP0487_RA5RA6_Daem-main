/**Com a mínim s’han de validar els formularis de registre, login i modificació de perfil
(d’usuaris comuns i promotors) */
// Nombre y Apellido solo letras= pattern="[A-Za-z]"
//Contraseña debe de tener número y letras
/**Cuando el mouse pasa por encima de algún elemento
window.addEventListener('mouseover', function(evt) {
    // Si elemento tiene la clase `enlace`
    if (evt.target.classList.contains('enlace')) {
      evt.target.style.color = 'orange';
    }
  });
  
  // Cuando el mouse salga de encima de algún elemento
  window.addEventListener('mouseout', function(evt) {
    // Si elemento tiene la clase `enlace`
    if (evt.target.classList.contains('enlace')) {
      evt.target.style.color = 'brown';
    }
  });*/

$("#form_signup").validate({
  focusCleanup: true,
  rules: {
    name: {
      required: true,
    },
    surname: {
      required: true,
    },
    password: {
      required: true,
    },
  },
  messages: {
    name: {
      required: "<span> Name and surname are required. </span>",
      pattern: "Only letters allowed",
    },
    surname: {
      required: "<span> Name and surname are required. </span>",
      pattern: "Only letters allowed",
    },
    password: {
      required: "<div> Password is required. </div>",
      pattern: "Must contain 8 or more characters",
    },
  },
});
