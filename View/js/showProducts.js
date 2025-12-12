// Función llamada showProducts que acepta un parámetro llamado platform
function showProducts(platform) {
  // Realizar una solicitud AJAX utilizando jQuery
  $.ajax({
    url: "../Controller/showProduct.php",
    type: "POST",
    // Datos que se enviarán en la solicitud, incluido el parámetro platform
    data: {
      getProductByPlataform: platform,
    },
    // Función que se ejecutará si la solicitud AJAX se completa correctamente
    success: function (response) {
      var productsHtml = "";

      if (response && response.length > 0) {
        if (platform != null) {
          // Verificar si la respuesta no está vacía
          response.forEach(function (product) {
            productsHtml += "<div class='product'>";
            productsHtml +=
              '<input type="hidden" class="idProduct" value="' +
              htmlspecialchars(product.IdProducto) +
              '">';
            productsHtml +=
              '<input type="hidden" class="idPlatform" value="' +
              product.id +
              '">';
            productsHtml +=
              "<img src='" +
              htmlspecialchars(product.Imagen) +
              "' alt='Catalogo' class='catalog'>";
            productsHtml +=
              "<div class='text'>" +
              htmlspecialchars(product.Nombre) +
              "</div>";
            productsHtml += "<div class='price-container'>"; // Añadido contenedor de precios
            productsHtml +=
              "<div class='percentage'>" +
              htmlspecialchars(product.Oferta) +
              "%</div>"; // Añade el símbolo de porcentaje
            productsHtml +=
              "<div class='price-percentage'>" +
              htmlspecialchars(product.FinalPrice) +
              "</div>";
            productsHtml += "</div>"; // Cierra el contenedor de precios
            productsHtml += "</div>";
          });
        } else {
          response.forEach(function (product) {
            productsHtml += "<div class='product'>";
            productsHtml +=
              '<input type="hidden" class="idProduct" value="' +
              htmlspecialchars(product.IdProducto) +
              '">';
            productsHtml +=
              '<input type="hidden" class="idPlatform" value="' +
              htmlspecialchars(product.id) +
              '">';
            productsHtml +=
              "<img src='" +
              htmlspecialchars(product.Imagen) +
              "' alt='Catalogo' class='catalog'>";
            productsHtml +=
              "<div class='text'>" +
              htmlspecialchars(product.Nombre) +
              " | " +
              htmlspecialchars(product.FinalPrice) +
              "</div>";
            productsHtml += "</div>";
          });
        }
      } else {
        productsHtml = "<div>No se encontraron productos.</div>"; // Mostrar un mensaje si no hay productos
      }
      $("#productsContainer").html(productsHtml);
    },
  });
}

// Function to avoid malicious code injection in HTML
function htmlspecialchars(str) {
  if (typeof str === "string") {
    return str
      .replace(/&/g, "&amp;")
      .replace(/</g, "&lt;")
      .replace(/>/g, "&gt;")
      .replace(/"/g, "&quot;")
      .replace(/'/g, "&#039;");
  }
  return str;
}
