// MOSTRAR OPCIONES ADMIN
document.addEventListener("DOMContentLoaded", function () {
  var adminOption = document.querySelector(".adminOption");
  var openButton = document.querySelector(".optionPlus");
  var closeButton = document.querySelector(".optionClose");

  openButton.addEventListener("click", function () {
    adminOption.classList.remove("hidden");
    closeButton.classList.remove("hidden");
    openButton.classList.add("hidden");
  });

  closeButton.addEventListener("click", function () {
    adminOption.classList.add("hidden");
    closeButton.classList.add("hidden");
    openButton.classList.remove("hidden");
  });
});

function showMessage(context, message, isError = false) {
  var messageContent = document.getElementById("messageContent");
  messageContent.innerHTML = `<h2> ${context} </h2>`;
  messageContent.innerHTML += `<p style="color: ${
    isError ? "red" : "green"
  };">${message}</p>`;
  messagePopup.style.display = "block";
  overlay.style.display = "block";
}

// MOSTRAR POPUP SI CLICAN AL button
function showPopup(popupId) {
  var popup = document.getElementById(popupId);
  if (popup) {
    popup.style.display = "block";
    if (
      popupId === "deleteProductPopup" ||
      popupId === "editProduct" ||
      popupId == "addProduct-Platform"
    ) {
      fetchProductSelect(); // Realizar la petición AJAX al abrir el popup de delete o edit
    }
  }
  var overlay = document.getElementById("overlay");
  if (overlay) {
    overlay.style.display = "block";
  }
}
// Función para ocultar todos los pop-ups
function hidePopups() {
  var popups = document.querySelectorAll(".popup");
  for (var i = 0; i < popups.length; i++) {
    popups[i].style.display = "none";
  }
  var overlay = document.getElementById("overlay");
  if (overlay) {
    overlay.style.display = "none";
  }
}

// Cerrar el pop-up cuando se hace clic en el botón de cerrar
var closeButtons = document.querySelectorAll(".close");
for (var i = 0; i < closeButtons.length; i++) {
  closeButtons[i].addEventListener("click", function () {
    hidePopups();
  });
}

// Muestra un select con todos los productos creados
function fetchProductSelect() {
  $.ajax({
    url: "../Controller/ShowProduct.php",
    type: "POST",
    dataType: "json",
    data: { getProduct: "getProductSelect" },
    success: function (response) {
      // Crear el select y llenarlo con opciones
      var selectHtml = "<label> Name of product: </label>";
      selectHtml += '<select name="productName" required>';
      selectHtml +=
        '<option value="" disabled selected>Select an option</option>';

      response.forEach(function (product) {
        selectHtml +=
          '<option value="' +
          htmlspecialchars(product.idProducto) +
          '">' +
          htmlspecialchars(product.Nombre) +
          "</option>";
      });

      selectHtml += "</select>";

      // Insertar el select en los contenedores correspondientes
      $("#selectDelete").html(selectHtml);
      $("#selectUpdate").html(selectHtml);
      $("#selectAddProduct-Platform").html(selectHtml);

      // Adjuntar el evento de cambio solo a los selects dentro del div con id "selectProduct"
      $("#selectUpdate select[name='productName']").change(function () {
        getProductInformation($(this).val());
      });
      // Adjuntar el evento de cambio solo a los selects dentro del div con id "selectAddProduct-Platform"
      $("#selectAddProduct-Platform select[name='productName']").change(
        function () {
          getAvaiblePlatforms($(this).val());
        }
      );
    },
    error: function () {
      $("#selectDelete").html("<p>Error fetching products</p>");
      $("#selectUpdate").html("<p>Error fetching products</p>");
      $("#selectAddProduct-Platform").html("<p>Error fetching products</p>");
    },
  });
}

// Muestra toda la informacion del producto seleccionado del select en los inputs
function getProductInformation(idProduct) {
  $.ajax({
    url: "../Controller/ShowProduct.php",
    type: "POST",
    dataType: "json",
    data: { getProductDetails: idProduct },
    success: function (data) {
      // Transforma el json_encode y muestra la informacion en los inputs
      $("input[name='productId']").val(data.IdProducto);
      $("input[name='productName']").val(data.Nombre);
      $("textarea[name='description']").val(data.Descripcion);
      $("input[name='stock']").val(data.Stock);
      $("input[name='discount']").val(data.Oferta);
      $("input[name='totalPrice']").val(data.Precio);
    },
    error: function (xhr, status, error) {
      console.error("Error getting product details");
    },
  });
}

// Muestra las plataformas disponibles para añadir a un producto seleccionado
function getAvaiblePlatforms(idProduct) {
  $.ajax({
    url: "../Controller/ProductController.php",
    type: "POST",
    dataType: "json",
    data: { getAvaiblePlatforms: idProduct },
    success: function (data) {
      var radioHtml = "";
      // Si la respuesta del servidor es 0, significa que no hay plataformas disponibles para añadir al producto
      if (data.length === 0) {
        radioHtml += "<p>No platforms available to add to the product.</p>";
        $("#addImagePlatform").hide();
      } else {
        radioHtml += "<label> Name of avaible platform: </label>";
        data.forEach(function (platform) {
          radioHtml += "<div class = 'radioStyle'>";
          radioHtml +=
            "<input type='radio' name='platform' value='" +
            platform.nombre +
            "' required>";
          radioHtml += "<label>" + platform.nombre + "</label>";
          radioHtml += "</div>";
        });
        $("#addImagePlatform").show();
      }
      // Insertar la respuesta en el div correcto
      $("#radioPlatformAvaible").html(radioHtml);
    },
    error: function (xhr, status, error) {
      console.error("Error al obtener las plataformas disponibles:", error);
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
