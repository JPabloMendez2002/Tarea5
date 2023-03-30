<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="http://www.cuc.ac.cr/app/cms/www/images/logo_cuc.png" width="25px" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" onclick="
                    let queryString3 = window.location.search;
                    let params3 = new URLSearchParams(queryString3);
                    let id3 = params3.get('id'); 
                    window.location.href=`./home.php?id=${id3}`">Inicio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" onclick="
                    let queryString2 = window.location.search;
                    let params2 = new URLSearchParams(queryString2);
                    let id2 = params2.get('id'); 
                    window.location.href=`./perfil.php?id=${id2}`">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="
                    let queryString = window.location.search;
                    let params = new URLSearchParams(queryString);
                    let id = params.get('id'); 
                    window.location.href=`./contactos.php?id=${id}`">Contactos</a>
                </li>

            </ul>
            <form class="d-flex">
                <a href="../index.php">
                    <button class="btn" style="background-color: #f7323f; color:white;" type="button">Cerrar Sesión <i class="fa-solid fa-right-from-bracket"></i></button>
                </a>
            </form>
        </div>
    </div>
</nav>