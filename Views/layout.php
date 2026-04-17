<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function MostrarCSS()
{
    echo '
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Casas</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Iconos -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

        <!-- CSS -->
        <link rel="stylesheet" href="/Examen_Grupo05_Miercoles/assets/css/styles.css">
    </head>';
}

function MostrarNav()
{
    echo '<div class="container mt-3"></div>';
}

function MostrarHeader()
{
    echo '
    <nav class="navbar navbar-dark bg-dark shadow">
        <div class="container d-flex justify-content-between">

            <!-- TÍTULO (CLICKEABLE) -->
            <a class="navbar-brand fw-bold" href="../vHome/login.php">
                <i class="fas fa-house"></i> Sistema de Alquiler de Casas
            </a>

            <!-- BOTONES -->
            <div>
                <a href="../vHome/consulta.php" class="btn btn-outline-light me-2">
                    <i class="fas fa-list"></i> Consulta
                </a>
                <a href="../vHome/alquiler.php" class="btn btn-primary">
                    <i class="fas fa-key"></i> Alquilar
                </a>
            </div>

        </div>
    </nav>';
}

function MostrarFooter()
{
    echo '
    <footer class="bg-dark text-white text-center p-3 mt-5">
        Examen Grupo 05 - Sistema de Casas
    </footer>';
}

function MostrarJS()
{
    echo '
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/Examen_Grupo05_Miercoles/assets/funciones/validaciones.js"></script>
    ';
}
