<!DOCTYPE html>
<html lang="en">

<head>
    <title>Iniciar Sesión</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/login.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">TI-161 Programación V</h2>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <br>
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(./assets/img/LogoIndex.svg);"></div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Inicio Sesión <span><i class="fa-solid fa-user"></i></span> <i class="fa-solid fa-badge-check"></i></h3>
                                </div>
                            </div>

                            <form class="signin-form" id="formLogin">
                                <div class="form-group mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa-solid fa-circle-user"></i></span>
                                        <input type="text" class="form-control" placeholder="Usuario" name="user" id="user">
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa-solid fa-unlock-keyhole"></i></span>
                                        <input type="password" class="form-control" placeholder="Contraseña" name="pass" id="pass">
                                    </div>
                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" id="btnlogin" name="btnlogin" class="form-control btn btn-primary">Ingresar <i class="fa-solid fa-right-to-bracket"></i></button>
                                </div>
                                <hr>

                                <div class="alert alert-danger text-center" id="validaciones" style="display:none;">
                                    <strong>No pueden existir campos vacíos</strong>
                                </div>

                                <div class="alert alert-danger text-center" id="contrasena" style="display:none;">
                                    <strong>Identificacion y/o contraseña incorrectos</strong>
                                </div>

                                <div class="alert alert-danger text-center" id="mensajelogin" style="display:none;">
                                    <strong>Identificacion y/o contraseña incorrectos</strong>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="./assets/js/login.js"></script>

    <?php
    require('footer.php');
    ?>

</body>

</html>