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

<h2>Alquilar Casa</h2>

<form method="POST" action="/Examen_Grupo05_Miercoles/Controllers/CasasController.php" onsubmit="return validar();">

<select name="IdCasa" id="IdCasa" onchange="cargarPrecio()">
<?php while($row = $casas->fetch_assoc()) { ?>
    <option value="<?= $row["IdCasa"] ?>" data-precio="<?= $row["PrecioCasa"] ?>">
        <?= $row["DescripcionCasa"] ?>
    </option>
<?php } ?>
</select>

<input type="text" id="Precio" readonly placeholder="Precio">

<input type="text" name="Usuario" id="Usuario" placeholder="Usuario">

<button type="submit" name="btnAlquilar">Alquilar</button>

</form>

</div>

<?php MostrarFooter(); ?>
<?php MostrarJS(); ?>

</body>
</html>