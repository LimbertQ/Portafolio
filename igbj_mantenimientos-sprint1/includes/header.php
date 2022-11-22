<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Registro de Equipos</title>
    <link rel="stylesheet" href="/styles/header.css">
    <link rel="stylesheet" href="/styles/person_style.css">
    <link rel="stylesheet" href="/styles/activo.css">
</head>

<body>
    <header>
        <div class="logo">
            <a href="/index.php">
                <img src="/img/logo.png" alt="logo dep">
            </a>
            <h2 class="nombre">SISTEMA DE REGISTROS Y MANTENIMIENTOS I.G.B.J.</h2>
        </div>
    </header>


    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <div class="dropdown">
                <button class="button" data-toggle="dropdown">
                    Activos
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="\igbJ_mantenimientos-Sprint1\includes\activos\viewActivo2.php">Activos</a>
                    <a class="dropdown-item" href="\igbJ_mantenimientos-Sprint1\includes\activos\activo.php">Crear</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="button btn-success" data-toggle="dropdown">
                    Personas
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/includes/persona/person_view.php">Personas Registradas</a>
                    <a class="dropdown-item" href="/includes/persona/person_register.php">Registrar Persona</a>
                </div>
            </div>
        </div>
    </nav>