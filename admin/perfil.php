<!DOCTYPE html>
<html lang="en">

<head>
    <title>Perfil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    require('../links.php')
    ?>
</head>

<body style="background-color: #f8f8f8;">

    <?php
    require('nav.php');
    require('modals.php');
    ?>


    <script>
        let queryString2 = window.location.search;
        let params2 = new URLSearchParams(queryString2);
        let id2 = params2.get('id');

        $.ajax({
            type: "GET",
            url: ` http://127.0.0.1:8000/api/administrador/${id2}`,
            success: function(response) {
                $("#nombreAD").val(response.Nombre);
                $("#apellidoAD").val(response.Apellidos);
                $("#identiAD").val(response.Identificacion);

            },
        });
    </script>


    <div class="container p-3 my-4" style="background-color: #212529; color: #ffffff;">
        <h1><img src="http://www.cuc.ac.cr/app/cms/www/images/logo_cuc.png" width="70px"></h1>
        <p>TI-161 Programación V</p>
    </div>

    <div class="container mt-3">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #212529; color: #ffffff; text-align:center;">
                <h3>Información del Perfil <i class="fa-duotone fa-user-check"></i></h3>
            </div>

            <div class="card-body">
                <div style="text-align: right;">

                </div>

                <div class="container mt-3">
                    <form method="POST">
                        <div class="row" style="text-align: center;">


                            <div class="col-md">
                                <h3>Nombre</h3>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                    <input type="text" disabled class="form-control" id="nombreAD" name="nombreAD" placeholder="Nombre" value="">
                                    <input type="text" disabled class="form-control" id="apellidoAD" name="apellidoAD" placeholder="Apellidos" value="">
                                </div>
                            </div>


                            <div class="col-md">
                                <h3>Identificación</h3>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-circle-user"></i></span>
                                    <input type="text" class="form-control" id="identiAD" name="identiAD" disabled placeholder="Identificación">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <hr>
            </div>
            <div class="card-footer" style="background-color: #212529; color: #ffffff; text-align:center;"></div>
        </div>
    </div>
    <?php
    require('../footer.php')
    ?>
</body>

</html>