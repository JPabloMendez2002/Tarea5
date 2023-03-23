$(document).ready(function () {
  cargaUsuarios();
  cargaContactos();
  /*-----------------------------------------------------------------------------ADMIN*/
  function cargaUsuarios() {
    $.ajax({
      type: "GET",
      url: "http://127.0.0.1:8000/api/usuarios",
      success: function (response) {
        for (var i = 0; i < response.length; i++) {
          $("#tablaUsuarios").append(`
                    <tr>
                        <td>${response[i].IdUsuario}</td>
                        <td>${response[i].Identificacion}</td>
                        <td>${response[i].Nombre}</td>
                        <td>${response[i].Apellidos}</td>
                        <td style='text-align: center;'>
                        ${
                          response[i].Estado == 1
                            ? `<p>Activo <i class="fa-duotone fa-circle-dot fa-beat-fade" style="--fa-primary-color: #198754; --fa-secondary-color: #42963c;"></i></p>`
                            : `<p>No Activo <i class="fa-duotone fa-circle-dot fa-beat-fade" style="--fa-primary-color: #dc3545; --fa-secondary-color: #dc3545;"></i></p>`
                        }
                        </td>
                        <td style='text-align: center;'>
                            <button type='button' class="btn btn-warning" data-bs-toggle='modal' data-bs-target='#editarUSUARIO' onclick='editarUsuario(${JSON.stringify(
                              response[i]
                            )})'><i class="fa-solid fa-pen-to-square fa-bounce"></i></button>
                            <button type='button' class="btn btn-danger" data-bs-toggle='modal' data-bs-target='#eliminarUSUARIO' onclick='eliminarUsuario(${JSON.stringify(
                              response[i]
                            )})'><i class="fa-solid fa-trash fa-shake"></i></button>

                        </td>
                    </tr>`);
        }
      },
    });
  }

  window.agregarUsuario = function () {
    $("#btnNuevoUsuario").click(function () {
      $.ajax({
        type: "POST",
        url: `http://127.0.0.1:8000/api/usuarios`,

        data: {
          Identificacion: $("#identificacion").val(),
          Nombre: $("#nombre").val(),
          Contrasena: $("#contrasena").val(),
          Apellidos: $("#apellidos").val(),
          Estado: $("#estado").val(),
        },
        success: function (data) {
          var mensaje = JSON.parse(data);
          Swal.fire({
            title: "Éxito",
            text: mensaje,
            icon: "success",
            confirmButtonText: "OK",
          }).then((result) => {
            if (result.isConfirmed) {
              location.reload();
            }
          });
        },
      });
    });
  };

  window.editarUsuario = function (usuario) {
    $("#nombreED").val(usuario.Nombre);
    $("#contraED").val(usuario.Contrasena);
    $("#apellidoED").val(usuario.Apellidos);
    $("#estadoED").val(usuario.Estado);
    $("#btnActUsuario").click(function () {
      $.ajax({
        type: "PUT",
        url: `http://127.0.0.1:8000/api/usuarios/${usuario.IdUsuario}`,

        data: {
          Nombre: $("#nombreED").val(),
          Contrasena: $("#contraED").val(),
          Apellidos: $("#apellidoED").val(),
          Estado: $("#estadoED").val(),
        },
        success: function (data) {
          var mensaje = JSON.parse(data);
          Swal.fire({
            title: "Éxito",
            text: mensaje,
            icon: "success",
            confirmButtonText: "OK",
          }).then((result) => {
            if (result.isConfirmed) {
              location.reload();
            }
          });
        },
      });
    });
  };

  window.eliminarUsuario = function (usuario) {
    $("#idUsuarioBorrar").val(usuario.IdUsuario);
    $("#btneliminaUsu").click(function () {
      $.ajax({
        type: "DELETE",
        url: `http://127.0.0.1:8000/api/usuarios/${usuario.IdUsuario}`,

        data: {
          IdUsuario: $("#idUsuarioBorrar").val(),
        },
        success: function (data) {
          var mensaje = JSON.parse(data);
          Swal.fire({
            title: "Éxito",
            text: mensaje,
            icon: "success",
            confirmButtonText: "OK",
          }).then((result) => {
            if (result.isConfirmed) {
              location.reload();
            }
          });
        },
      });
    });
  };

  /*-----------------------------------------------------------------------------FIN ADMIN*/
  /*-----------------------------------------------------------------------------USUARIO*/

  $("#btnCargaTelefonos").click(function (e) {
    e.preventDefault();

    let id = $(this).attr("data-id");

    $.ajax({
      type: "GET",
      url: ` http://127.0.0.1:8000/api/contactos/telefonos/${id}`,
      success: function (response) {
        $("#tablaTelefonos").show("slow");
        for (let i = 0; i < response.length; i++) {
          $("#tbodyTelefonos").append(`
            <tr>
                <td>${response[i].Telefono}</td>
                <td style='text-align: center;'>
                    <button type='button' class="btn btn-danger" onclick=\"$.ajax({type: 'DELETE', url: 'http://127.0.0.1:8000/api/telefonos/${response[i].IdTelefono}',success: function(response){Swal.fire('Exito','Se elimino el teléfono correctamente.','success'); setTimeout(function(){location.reload();},2000)}});\"><i class="fa-solid fa-trash fa-shake"></i></button>
                    </td>
        
            </tr>`);
        }
      },
    });
  });

  $("#btnAgregarTelefono").click(function (e) {
    e.preventDefault();
    let id = $(this).attr("data-id");

    $.ajax({
      type: "GET",
      url: ` http://127.0.0.1:8000/api/contactos/telefonos/${id}`,
      success: function (response) {
        $("#FormNTelefono").show("slow");
        for (let i = 0; i < 1; i++) {
          $("#divInputs").append(`

          <div class="row">
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Telefono" id="telnuevo" name="telnuevo" />
                </div>
                <div class="col-md-3">
                <button type='button' class="btn btn-success" onclick=\"
                $.ajax({type: 'POST', url: 'http://127.0.0.1:8000/api/telefonos'
                ,data:{
                    IdContacto: ${response[i].IdContacto},
                    Telefono: '12345678',
                },success: function(response){Swal.fire('Exito','Se agrego el teléfono correctamente.','success'); setTimeout(function(){location.reload();},2000)}});\"><i class="fa-solid fa-check"></i></button>
        
            </div>
          </div>
        `);
        }
      },
    });
  });


  $("#btnAgregaCorreos").click(function (e) {
    e.preventDefault();
    let id = $(this).attr("data-id");

    $.ajax({
      type: "GET",
      url: ` http://127.0.0.1:8000/api/contactos/correos/${id}`,
      success: function (response) {
        $("#FormNCorreos").show("slow");
        for (let i = 0; i < 1; i++) {
          $("#divInputsCorreos").append(`

          <div class="row">
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="E-Mail"/>
                </div>
                <div class="col-md-3">
                <button type='button' class="btn btn-success" onclick=\"
                $.ajax({type: 'POST', url: 'http://127.0.0.1:8000/api/correos'
                ,data:{
                    IdContacto: ${response[i].IdContacto},
                    Correo: 'soporte@spestechnical.com',
                },success: function(response){Swal.fire('Exito','Se agrego el E-Mail correctamente.','success'); setTimeout(function(){location.reload();},2000)}});\"><i class="fa-solid fa-check"></i></button>
        
            </div>
          </div>
        `);
        }
      },
    });
  });


  $("#btnCargaCorreos").click(function (e) {
    e.preventDefault();

    let id = $(this).attr("data-id");

    $.ajax({
      type: "GET",
      url: ` http://127.0.0.1:8000/api/contactos/correos/${id}`,
      success: function (response) {
        $("#tablaCorreos").show("slow");
        for (let i = 0; i < response.length; i++) {
          $("#tbodyCorreos").append(`
            <tr>
        
                <td>${response[i].Correo}</td>
                <td style='text-align: center;'>
                <button type='button' class="btn btn-danger" onclick=\"$.ajax({type: 'DELETE', url: 'http://127.0.0.1:8000/api/correos/${response[i].IdCorreo}',success: function(response){Swal.fire('Exito','Se elimino el E-Mail correctamente.','success'); setTimeout(function(){location.reload();},2000)}});\"><i class="fa-solid fa-trash fa-shake"></i></button>
                </td>
            </tr>`);
        }
      },
    });
  });

  function cargaContactos() {
    $.ajax({
      type: "GET",
      url: "http://127.0.0.1:8000/api/contactos",
      success: function (response) {
        for (var i = 0; i < response.length; i++) {
          $("#CartaContactos").append(`
                    <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-12">
                            <div class="card-header" style="background-color: #393d42; text-align: right;">
                            <button type='button' class="btn btn-warning" data-bs-toggle='modal' data-bs-target='#editarCONTACT' onclick='editarContacto(${JSON.stringify(
                              response[i]
                            )})'><i class="fa-solid fa-pen-to-square"></i></button>
                            <button type='button' class="btn btn-danger" data-bs-toggle='modal' data-bs-target='#eliminaCONTACT' onclick='eliminarContacto(${JSON.stringify(
                              response[i]
                            )})'><i class="fa-solid fa-trash"></i></button>   
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <center>
                                <img class="rounded-circle" alt="" src="../assets/img/default-avatar.png">
                            </center>
                        </div>

                        <div class="col-md-9">
                            <div class="card-body info">
                                <h4>Nombre: ${response[i].Nombre}
                                </h4>
                                <h4>Apellidos: ${response[i].Apellidos}</h4>
                                <h4>
                                    <button type='button' data-bs-toggle='modal' data-bs-target='#modalTelefonos' onclick=\" $('#btnCargaTelefonos').attr('data-id', ${
                                      response[i].IdContacto
                                    });
                                      $('#btnAgregarTelefono').attr('data-id', ${
                                        response[i].IdContacto
                                      });
                                      \" class='btn btn-primary'>Teléfono(s) <i class='fa-solid fa-phone'></i></button>
                                </h4>
                                <h4>
                                    <button type='button' data-bs-toggle='modal' data-bs-target='#modalCorreos' onclick=\" 
                                    $('#btnCargaCorreos').attr('data-id', ${
                                      response[i].IdContacto
                                    });
                                    
                                    $('#btnAgregaCorreos').attr('data-id', ${
                                        response[i].IdContacto
                                      });
                                    \" class='btn btn-dark'>E-Mail(s) <i class="fa-solid fa-envelope"></i></button>
                                </h4>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card-footer text-center" style="background-color: #393d42;">
                                <a class="btn btn-primary" style="background-color: #3F51B5;" href="${
                                  response[i].Facebook
                                }" role="button">
                                    <i class="fab fa-facebook fa-lg"></i> Facebook
                                </a>

                                <a class="btn btn-primary instagram" href="${
                                  response[i].Instagram
                                }" role="button">
                                    <i class="fab fa-instagram fa-lg"></i> Instagram
                                </a>
                                <a class="btn btn-primary" style="background-color: #55acee;" href="${
                                  response[i].Twitter
                                }" role="button">
                                    <i class="fab fa-twitter me-2"></i>Twitter
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>`);
        }
      },
    });
  }
});

window.agregarContacto = function () {
  $("#btnNuevoContacto").click(function () {
    $.ajax({
      type: "POST",
      url: `http://127.0.0.1:8000/api/contactos`,

      data: {
        IdUsuario: 4,
        Nombre: $("#nombreC").val(),
        Apellidos: $("#apellidosC").val(),
        Correo: $("#correoC").val(),
        Telefono: $("#telefonoC").val(),
        Facebook: $("#linkFACE").val(),
        Instagram: $("#linkINSTA").val(),
        Twitter: $("#linkTWEET").val(),
      },

      success: function (response) {
        Swal.fire("Exito", "Se agrego correctamente el contacto.", "success");
        setTimeout(function () {
          location.reload();
        }, 2000);
      },
    });
  });
};

window.editarContacto = function (contacto) {
  $("#nombreCNED").val(contacto.Nombre);
  $("#apellidosCNED").val(contacto.Apellidos);
  $("#linkFACED").val(contacto.Facebook);
  $("#linkINSTAD").val(contacto.Instagram);
  $("#linkTWEETD").val(contacto.Twitter);
  $("#btnActContacto").click(function () {
    $.ajax({
      type: "PUT",
      url: `http://127.0.0.1:8000/api/contactos/${contacto.IdContacto}`,

      data: {
        Nombre: $("#nombreCNED").val(),
        Apellidos: $("#apellidosCNED").val(),
        Instagram: $("#linkINSTAD").val(),
        Facebook: $("#linkFACED").val(),
        Twitter: $("#linkTWEETD").val(),
      },

      success: function (response) {
        Swal.fire(
          "Exito",
          "Se actualizo correctamente el contacto.",
          "success"
        );
        setTimeout(function () {
          location.reload();
        }, 2000);
      },
    });
  });
};

window.eliminarContacto = function (contacto) {
  $("#idContactoBorrar").val(contacto.IdContacto);
  $("#btneliminaContact").click(function () {
    $.ajax({
      type: "DELETE",
      url: `http://127.0.0.1:8000/api/contactos/${contacto.IdUsuario}`,

      data: {
        IdContacto: $("#idContactoBorrar").val(),
      },
      success: function (response) {
        Swal.fire("Exito", "Se elimino correctamente el contacto.", "success");
        setTimeout(function () {
          location.reload();
        }, 2000);
      },
    });
  });
};

/*-----------------------------------------------------------------------------FIN USUARIO*/
