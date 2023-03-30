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
        document.cookie = `token=${response["Token"]}; max-age=60;`;

        window.location.href = `./usuario/home.php?id=${response["ID"]}`;
      },
    }).fail(function (errorThrown) {
      if (errorThrown.status == 404) {
        Swal.fire("Error!", "Usuario y/o contraseña incorrectos.", "error");
      } else if (errorThrown.status == 400) {
        Swal.fire("Advertencia!", "Complete los espacios vacíos.", "warning");
      }
    });
  });

  /**
   * Login Admin
   */
  $("#btnloginAdmin").click(function (e) {
    e.preventDefault();

    let user = $("#userAD").val();
    let pass = $("#passAD").val();

    $.ajax({
      type: "POST",
      url: "http://127.0.0.1:8000/api/login/admin",
      data: { Identificacion: user, Contrasena: pass },
      success: function (response) {
        document.cookie = `token=${response["Token"]}; max-age=60;`;

        window.location.href = `home.php?id=${response["ID"]}`;
      },
    }).fail(function (errorThrown) {
      if (errorThrown.status == 404) {
        Swal.fire("Error!", "Usuario y/o contraseña incorrectos.", "error");
      } else if (errorThrown.status == 400) {
        Swal.fire("Advertencia!", "Complete los espacios vacíos.", "warning");
      }
    });
  });
});


