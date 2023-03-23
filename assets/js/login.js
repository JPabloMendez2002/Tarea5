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
        tipoususario = JSON.stringify(response["TipoUsuario"]);

        if (Object.values(response) == "Identificacion y/o contraseña incorrectos") {
          $("#contrasena").show("slow");
        } else {
          if ((tipoususario = "Usuario")) {
            window.location.href = "./usuario/home.php";
          } else {
            console.log(tipoususario);
            window.location.href = "./admin/home.php";
          }
        }
      },
    }).fail(function (errorThrown) {
      if (errorThrown.status == 400) {
        $("#validaciones").show("slow");
      }
    });
  });
});
