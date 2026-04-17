<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Examen_Grupo05_Miercoles/Views/layout.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/Examen_Grupo05_Miercoles/Models/CasasModel.php";

$model = new CasasModel();
$casas = $model->ObtenerDisponibles();
?>

<!DOCTYPE html>
<html>

<?php MostrarCSS(); ?>

<body>

<?php MostrarHeader(); ?>
<?php MostrarNav(); ?>

<div class="container">

<div class="container-box">

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Alquilar Casa</h2>

    <a href="login.php" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Volver
    </a>
</div>

<form method="POST" action="../../Controllers/CasasController.php" onsubmit="return validar();">

<div class="mb-3">
    <label>Casa</label>
    <select name="IdCasa" id="IdCasa" class="form-select" onchange="cargarPrecio()">
        <?php while($row = $casas->fetch_assoc()) { ?>
            <option value="<?= $row["IdCasa"] ?>" data-precio="<?= $row["PrecioCasa"] ?>">
                <?= $row["DescripcionCasa"] ?>
            </option>
        <?php } ?>
    </select>
</div>

<div class="mb-3">
    <label>Precio</label>
    <input type="text" id="Precio" class="form-control" readonly>
</div>

<div class="mb-3">
    <label>Usuario</label>
    <input type="text" name="Usuario" id="Usuario" class="form-control">
</div>

<button name="btnAlquilar" class="btn btn-primary w-100">
    <i class="fas fa-check"></i> Confirmar Alquiler
</button>

</form>

</div>
</div>

<?php MostrarFooter(); ?>
<?php MostrarJS(); ?>

</body>
</html>