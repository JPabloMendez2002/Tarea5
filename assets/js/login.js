$(document).ready(function () {
  /**
   * Login
   */
  $("#btnlogin").click(function (e) {
    e.preventDefault();

    let user = $("#user").val();
    let pass = $("#pass").val();

    $.ajax({
      type: "POST",
      url: "http://127.0.0.1:8000/api/login",
      data: { Identificacion: user, Contrasena: pass },
      success: function (response) {

        if ((response['Usuario'] = "Tipo1")) {
          window.location.href = `./usuario/home.php?id=${response['ID']}`;
        } else {
          window.location.href = `./admin/home.php?id=${response['ID']}`;
        }
      },
    }).fail(function (errorThrown) {
      if (errorThrown.status == 404) {
        $("#mensajelogin").show("slow");
      }
    });
  });
});
