<!DOCTYPE html>
<html lang="en">

<head>
    <title>Usuarios</title>
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

    <div class="container p-3 my-4" style="background-color: #212529; color: #ffffff;">
        <h1><img src="http://www.cuc.ac.cr/app/cms/www/images/logo_cuc.png" width="70px"></h1>
        <p>TI-161 Programación V</p>
    </div>

    <div class="container mt-3">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #212529; color: #ffffff; text-align:center;">
                <h3 class="text-center">Lista de Usuarios <i class="fa-duotone fa-list-check"></i></h3>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#agregarUSUARIO" onclick="agregarUsuario()"><i class="fa-solid fa-user-plus"></i></button>
            </div>

            <div class="card-body">
                <div class="container mt-3">

                    <div class="table-responsive-lg">
                        <form class="d-flex">
                            <input class="form-control me-2" id="BuscaV" type="search" placeholder="Buscar...">
                            <button class="btn btn-outline-primary" id="BuscaV2" type="button"><i class="fa-regular fa-magnifying-glass"></i></button>
                        </form>
                        <script>
                            $(document).ready(function() {
                                $("#BuscaV").on("keyup", function() {
                                    var value = $(this).val().toLowerCase();

                                    $("#tablaUsuarios tr").filter(function() {
                                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                    });
                                });

                                $("#BuscaV2").on('click', function() {
                                    var value = $('#BuscaV').val().toLowerCase();

                                    $("#tablaUsuarios tr").filter(function() {
                                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                    });
                                });
                            });
                        </script>
                        <table class="table table-dark table-hover table-bordered text-md-center">
                            <thead class="table-dark">
                                <hr>
                                <br>
                                <tr>
                                    <th>ID</th>
                                    <th>Identificación</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Estado</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody class="table-secondary" id="tablaUsuarios">

                            </tbody>
                        </table>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="card-footer" style="background-color: #212529; color: #ffffff; text-align:center;"></div>
        </div>
    </div>

    <script src="../assets/js/main.js"></script>
    <?php
    require('../footer.php')
    ?>


</body>

</html>