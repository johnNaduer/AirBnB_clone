<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tu Título</title>
    <!-- Agrega los archivos CSS de Bootstrap y tu propio archivo de estilos CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos2.css">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    <div class="container">
        <span class="navbar-brand text-success">NOMBRE Y APELLIDO DEL USUARIO</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nosotros</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">
                        Servicios
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Preguntas Frecuentes</a>
                        <a class="dropdown-item" href="#">Compras</a>
                        <a class="dropdown-item" href="servicios.html">Otros</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Salir</a>
                </li>
            </ul>
            <div class="social-icons">
                <a class="btn btn-outline-primary" target="_blank" href="https://www.facebook.com">Facebook</a>
                <a class="btn btn-outline-danger" target="_blank" href="https://www.youtube.com">Youtube</a>
            </div>
        </div>
    </div>
</nav>

<!-- Contenido de la página -->

<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

