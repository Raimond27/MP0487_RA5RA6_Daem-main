$(document).on("click", ".product", function () {
  // Obtener el valor del ID del producto desde el input hidden
  var productId = $(this).find(".idProduct").val();
  var platformId = $(this).find(".idPlatform").val();

  // Guardar el idProduct en sessionStorage
  sessionStorage.setItem("idProduct", productId);
  sessionStorage.setItem("idPlatform", platformId);

  // Redirigir a la página de producto
  window.location.href = "../View/product.php";
});

$(document).ready(function () {
  // Obtener el idProduct del sessionStorage
  var productId = sessionStorage.getItem("idProduct");
  var platformId = sessionStorage.getItem("idPlatform");

  // Si se proporciona un idProduct en el sessionStorage
  if (productId) {
    // Mostrar los datos del producto correspondiente
    showProduct(productId, platformId);
  }
});

function showProduct(productId, platformId) {
  $.ajax({
    url: "../Controller/ShowProduct.php",
    type: "POST",
    dataType: "json",
    data: {
      idProduct: productId,
      idPlatform: platformId,
    },
    success: function (response) {
      // Construye el HTML basado en la respuesta JSON
      var productHtml = "<div class='product-information'>";
      productHtml += "<div class='product-images'>";
      productHtml +=
        "<img src='" +
        htmlspecialchars(response.Imagen) +
        "' alt='Product Image' class='product-image'>";
      productHtml += "</div>";
      productHtml += "<div class='product-info'>";
      productHtml +=
        "<h1 class='product-name'>" +
        htmlspecialchars(response.Nombre) +
        "</h1>";
      productHtml += "<div class='amount'>";
      productHtml +=
        "<div class='discounts'>" + htmlspecialchars(response.Price) + "</div>";
      productHtml +=
        "<div class='discounted'>" +
        htmlspecialchars(response.Offer) +
        "</div>";
      productHtml +=
        "<div class='total'>" +
        htmlspecialchars(response.FinalPrice) +
        "</div>";
      productHtml += "</div>";
      productHtml += "<button class='button'>COMPRAR</button>";
      productHtml += "</div>";
      productHtml += "<div class='additional-information'>";
      productHtml +=
        "<div class='product-description'>" +
        "Description: " +
        htmlspecialchars(response.Descripcion) +
        "</div>";
      productHtml +=
        "<div class='product-platform'>" +
        "Platform: " +
        htmlspecialchars(response.nombre) +
        "</div>";
      productHtml += "</div>";
      productHtml += "</div>";

      // Muestra la información en el contenedor del producto
      $("#productContainer").html(productHtml);
    },
    error: function (xhr, status, error) {
      console.error("Error al obtener datos del producto:", error);
    },
  });
}

// Función para evitar inyección de código malicioso en el HTML
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
