<?php
$imgrand = './Assets/images/rand';
?>
<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Feito em bootstrap">
        <meta name="author" content="Greidson Santos">
        <meta name="generator" content="GS Dev">
        <title>Site Bootstrap 5</title>    

        <!-- Estilo CSS -->
        <link href="./Assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="./Assets/css/carousel.css" rel="stylesheet">
        <link href="./Assets/css/custom.css" rel="stylesheet">
        <link href="./Assets/css/features.css" rel="stylesheet">
        <link href="./Assets/css/footer.css" rel="stylesheet">
        <link href="./Assets/css/bootstrap-icons.css" rel="stylesheet">

    </head>
    <body>

        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="./"><img src="./Assets/images/logo.png" alt="Bootstrap" width="85" class=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">A empresa</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./pagina.php?p=1">Quem Somos</a></li>
                                    <li><a class="dropdown-item" href="./pagina.php?p=2">Missão</a></li>
                                    <li><a class="dropdown-item" href="./pagina.php?p=3">Valores</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="./colaboradores.php">Colaboradores</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="./pagina.php">Página</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <button class="nav-link btn text-white btn-outline-danger btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#modal-login">ENTRAR</button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
        <?php include('modal-login.php') ?>

        <main>