<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Examen_Grupo05_Miercoles/Views/layout.php";
?>

<!DOCTYPE html>
<html>

<?php MostrarCSS(); ?>

<body>

    <?php MostrarHeader(); ?>
    <?php MostrarNav(); ?>

    <!-- ================= SLIDER ================= -->
    <div class="container d-flex justify-content-center my-4">
        <div id="carouselExampleIndicators" class="carousel slide w-75" data-bs-ride="carousel">

            <!-- Indicadores -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Alajuela"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="San José"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Heredia"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Cartago"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Guanacaste"></button>
            </div>

            <!-- Imágenes -->
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="../assets/images/Alajuela.png" class="d-block w-100" alt="Alajuela">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="../assets/images/SanJose.png" class="d-block w-100" alt="San José">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="../assets/images/Heredia.png" class="d-block w-100" alt="Heredia">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="../assets/images/Cartago.png" class="d-block w-100" alt="Cartago">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="../assets/images/Guanacaste.png" class="d-block w-100" alt="Guanacaste">
                </div>
            </div>

            <!-- Controles -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>


    <div class="container">

        <div class="container-box text-center">

            <h2>Bienvenido!</h2>
            <p>Este es un sistema de alquiler de casas</p>
            <p>Si quiere alquilar una casa porfavor dele al boton de "Ingresar"</p>

            <a href="consulta.php" class="btn btn-primary">
                <i class="fas fa-arrow-right"></i> Ingresar
            </a>

        </div>
    </div>

    <!-- ================= CONTENEDORES CON IMÁGENES ================= -->
    <div class="container mt-5">
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0 h-100">
                    <img src="../assets/images/casa1.jpg" class="card-img-top img-fluid rounded" alt="Producto 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Casa Moderna</h5>
                        <p class="card-text">Diseño minimalista con acabados de lujo.</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0 h-100">
                    <img src="../assets/images/casa2.jpg" class="card-img-top img-fluid rounded" alt="Producto 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Casa Familiar</h5>
                        <p class="card-text">Espacios amplios y cómodos para toda la familia.</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0 h-100">
                    <img src="../assets/images/casa3.jpg" class="card-img-top img-fluid rounded" alt="Producto 3">
                    <div class="card-body text-center">
                        <h5 class="card-title">Casa de Campo</h5>
                        <p class="card-text">Perfecta para descansar rodeado de naturaleza.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php MostrarFooter(); ?>
    <?php MostrarJS(); ?>

</body>

</html>