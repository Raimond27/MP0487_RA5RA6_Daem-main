$(document).ready(function () {
  getUserInformation();
});

function getUserInformation() {
  $.ajax({
    url: "../Controller/UserController.php",
    type: "POST",
    dataType: "json",
    data: { getDataUser: "DataUser" },
    success: function (data) {
      // Transforma el json_encode y muestra la información en los inputs
      $("input[name='name']").val(data.Nombre);
      $("input[name='surname']").val(data.Apellido);
    },
    error: function (error) {
      console.log(error);
    },
  });
}
