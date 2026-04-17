<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Examen_Grupo05_Miercoles/Views/layout.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/Examen_Grupo05_Miercoles/Models/CasasModel.php";

$model = new CasasModel();
$data = $model->ConsultarCasas();
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

        <div class="container-box">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2>Consulta de Casas</h2>

                <a href="login.php" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Volver
                </a>
            </div>

            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Usuario</th>
                        <th>Estado</th>
                        <th>Fecha</th>
                    </tr>
                </thead>

                <tbody>
                    <?php while ($row = $data->fetch_assoc()) { ?>
                        <tr>
                            <td><?= $row["DescripcionCasa"] ?></td>
                            <td>₡<?= number_format($row["PrecioCasa"]) ?></td>
                            <td><?= $row["UsuarioAlquiler"] ?? "-" ?></td>
                            <td>
                                <?php if ($row["Estado"] == "Disponible") { ?>
                                    <span class="badge bg-success">Disponible</span>
                                <?php } else { ?>
                                    <span class="badge bg-warning">Reservado</span>
                                <?php } ?>
                            </td>
                            <td><?= $row["Fecha"] ?? "-" ?></td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>

        </div>
    </div>

    <?php MostrarFooter(); ?>
    <?php MostrarJS(); ?>

</body>

</html>