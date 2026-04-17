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

<h2>Consulta de Casas</h2>

<table>
<tr>
    <th>Descripción</th>
    <th>Precio</th>
    <th>Usuario</th>
    <th>Estado</th>
    <th>Fecha</th>
</tr>

<?php while($row = $data->fetch_assoc()) { ?>
<tr>
    <td><?= $row["DescripcionCasa"] ?></td>
    <td><?= $row["PrecioCasa"] ?></td>
    <td><?= $row["UsuarioAlquiler"] ?></td>
    <td><?= $row["Estado"] ?></td>
    <td><?= $row["Fecha"] ?></td>
</tr>
<?php } ?>

</table>

</div>

<?php MostrarFooter(); ?>
<?php MostrarJS(); ?>

</body>
</html>