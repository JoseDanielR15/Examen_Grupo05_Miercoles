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
<?php while($row = $data->fetch_assoc()) { ?>
<tr>
    <td><?= $row["DescripcionCasa"] ?></td>
    <td>₡<?= number_format($row["PrecioCasa"]) ?></td>
    <td><?= $row["UsuarioAlquiler"] ?? "-" ?></td>
    <td>
        <?php if($row["Estado"] == "Disponible") { ?>
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