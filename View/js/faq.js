document.querySelectorAll(".faq-question").forEach((button) => {
  button.addEventListener("click", () => {
    const faqAnswer = button.nextElementSibling;

    button.classList.toggle("active");

    if (button.classList.contains("active")) {
      faqAnswer.style.maxHeight = faqAnswer.scrollHeight + "px";
    } else {
      faqAnswer.style.maxHeight = 0;
    }
  });
});

document.getElementById("searchInput").addEventListener("input", function () {
  const searchValue = this.value.toLowerCase(); // Obtener el valor de búsqueda en minúsculas

  // Iterar sobre todas las respuestas de preguntas frecuentes
  document.querySelectorAll(".faq-answer").forEach(function (answer) {
    const answerText = answer.textContent.toLowerCase(); // Obtener el texto de la respuesta en minúsculas

    // Si la respuesta coincide con el texto de búsqueda, mostrar la pregunta correspondiente, de lo contrario, ocultarla
    const questionItem = answer.parentElement;
    if (answerText.includes(searchValue)) {
      questionItem.style.display = "block";
    } else {
      questionItem.style.display = "none";
    }
  });
});
