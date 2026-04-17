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

        <link rel="stylesheet" href="../../assets/css/styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    </head>';
}

function MostrarNav()
{
    echo '
    <nav class="nav">
        <a href="../vHome/consulta.php">
            <i class="fas fa-home"></i> Consulta Casas
        </a>
        <a href="../vHome/alquiler.php">
            <i class="fas fa-key"></i> Alquilar Casa
        </a>
    </nav>';
}

function MostrarHeader()
{
    echo '
    <header class="header">
        <h2>Sistema de Alquiler de Casas</h2>
    </header>';
}

function MostrarFooter()
{
    echo '
    <footer class="footer">
        <p>Examen Grupo 05 - MN</p>
    </footer>';
}

function MostrarJS()
{
    echo '
    <script src="../../assets/funciones/validaciones.js"></script>
    ';
}
?>