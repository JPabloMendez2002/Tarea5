<?php
if (isset($_COOKIE['token'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Contactos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
        require('../links.php')
        ?>
        <style>
            .instagram {
                background: #f09433;
                background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
                background: -webkit-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
                background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f09433', endColorstr='#bc1888', GradientType=1);
            }
        </style>

    </head>

    <body>

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
                    <h3 class="text-center">Agenda de Contactos <i class="fa-duotone fa-address-book"></i></h3>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#agregarCONTACT" onclick="agregarContacto()"><i class="fa-solid fa-user-plus"></i></button>
                </div>

                <div class="card-body">
                    <div class="container mt-3">
                        <div id="CartaContactos">

                        </div>
                    </div>
                    <div class="card-footer" style="background-color: #212529; color: #ffffff;"></div>
                </div>
            </div>


            <script src="../assets/js/main.js"></script>
            <?php
            require('../footer.php')
            ?>

    </body>

    </html>

<?php
} else {
?>
    <script>
        window.location.href = '../index.php';
    </script>
<?php
}
?>