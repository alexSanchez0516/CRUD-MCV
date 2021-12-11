<?php


if (!isset($_SESSION)) {
    session_start();
}

$auth = $_SESSION['login'] ?? false; //si no existe es igual a null
use Model\Services;

$data = Services::getAny("name,id", "services");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/build/img/Favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../build/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Divisione</title>
</head>

<body>
    <header class="header_nav">
        <a class="subtitle-what" href="https://api.whatsapp.com/send?phone=0034634749073"><i class="fab fa-whatsapp"></i></a>
        <nav class="d-flex nav-brand">
            <a class="navbarbrand m-2 " href="#"><img src="../build/img/Divisione.png" class="logo"></a>
            <div class="dark-mode">
                <i class="fas fa-moon m-2"></i>
            </div>
            <div class="mobile-menu">
                <i id="burger" class="fas fa-bars"></i>
            </div>
            <ul class="nav-content">
                <a href="/">Inicio</a></li>
                <a href="/servicios" class="d-flex mn">Servicios
                </a>

                <a href="/sobre-nosotros">Sobre Nosotros</a>
                <a href="/contacto">Contacto</a>

                <?php if ($auth) : ?>
                    <a href="/admin">Panel Administración</a>
                    <a href="/">Crear cuenta</a>
                    <a href="/close_sesion.php">Cerrar sesión</a>
                <?php endif; ?>



            </ul>
        </nav>
    </header>
    <script src="../build/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <?php echo $content; ?>


    <footer class="footer-content d-flex flex-column justify-content-center m-2 w-100">
        <div class="wrap-sub-footer ">
            <div class="box-sub-footer d-flex flex-column">
                <span class="title-box-sub-foter" id="fix-title-box-sub-foter">
                    Divisione
                </span>
                <p class="content-box-sub-footer">
                    Divisione es tu empresa de Desarrollo. Somos expertos en Diseño de Páginas Web, Diseño de Tiendas Online, Posicionamiento Web (SEO y SEM), cualquier trabajo de Diseño Gráfico y Redes Sociales.
                </p>

            </div>
            <div class="box-sub-footer d-flex flex-column">
                <span class="title-box-sub-foter">
                    servicios
                </span>
                <ul class="list-services-sub-footer d-flex flex-column">
                    <?php foreach ($data as $serviceInfo): ?>
                        <li><a href="/servicio?id=<?php echo $serviceInfo[1] ?>"><?php echo $serviceInfo[0] ?></a></li>
                    <?php endforeach; ?>
                </ul>

            </div>

            <div class="box-sub-footer d-flex flex-column">
                <span class="title-box-sub-foter">
                    Avisos Legales
                </span>
                <ul class="list-page-legal-sub-footer d-flex flex-column">
                    <li><a href="/privacidad">Política de Privacidad</a></li>
                    <li><a href="/cookies">Política de Cookies</a></li>
                    <li><a href="/legal">Aviso Legal</a></li>
                </ul>


            </div>

        </div>
        <hr>


        <p class="text-dark p-4 text-center">Todos Los Derechos Reservados <?php echo date('Y') ?> &copy;</p>
    </footer>
</body>