<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Examen_Grupo05_Miercoles/Views/layout.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/Examen_Grupo05_Miercoles/Models/CasasModel.php";

$model = new CasasModel();
$casas = $model->ObtenerTodas();
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
    <h2>Liberar Casa</h2>

    <a href="consulta.php" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Volver
    </a>
</div>

<form method="POST" action="../../Controllers/CasasController.php" onsubmit="return validarLiberar();">

<div class="mb-3">
    <label>Casa Reservada</label>
    <select name="IdCasa" id="IdCasaLiberar" class="form-select">
        <option value="">-- Seleccione una casa --</option>
        <?php $casas->data_seek(0); ?>
        <?php while($row = $casas->fetch_assoc()) { ?>
            <?php if($row["UsuarioAlquiler"]) { ?>
                <option value="<?= $row["IdCasa"] ?>" data-usuario="<?= $row["UsuarioAlquiler"] ?>">
                    <?= $row["DescripcionCasa"] ?> - Reservado por <?= $row["UsuarioAlquiler"] ?>
                </option>
            <?php } ?>
        <?php } ?>
    </select>
</div>

<button name="btnLiberar" class="btn btn-danger w-100">
    <i class="fas fa-trash"></i> Liberar Casa
</button>

</form>

</div>
</div>

<?php MostrarFooter(); ?>
<?php MostrarJS(); ?>

</body>
</html>