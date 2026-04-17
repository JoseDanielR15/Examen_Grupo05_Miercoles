<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Examen_Grupo05_Miercoles/Views/layout.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/Examen_Grupo05_Miercoles/Models/CasasModel.php";

$model = new CasasModel();
$casas = $model->ObtenerTodas();

// Verificar conexión
if (!$casas) {
    die('Error al obtener casas de la BD');
}
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

    <a href="consulta.php" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Volver
    </a>
</div>

<form method="POST" action="../../Controllers/CasasController.php" onsubmit="return validar();">

<div class="mb-3">
    <label>Casa</label>
    <select name="IdCasa" id="IdCasa" class="form-select" onchange="cargarPrecio()">
        <option value="">-- Seleccione una casa --</option>
        <?php 
        // Obtener datos nuevamente para el select
        $casas2 = $model->ObtenerTodas();
        while($row = $casas2->fetch_assoc()) { 
            $precio = intval($row["PrecioCasa"]);
            $usuario = $row["UsuarioAlquiler"];
            $descripcion = htmlspecialchars($row["DescripcionCasa"]);
            $id = $row["IdCasa"];
        ?>
            <option value="<?php echo $id; ?>" data-precio="<?php echo $precio; ?>" data-usuario="<?php echo $usuario; ?>" <?php echo $usuario ? 'disabled' : ''; ?>>
                <?php echo $descripcion; ?> - ₡<?php echo number_format($precio); ?> (<?php echo $usuario ? 'Reservado' : 'Disponible'; ?>)
            </option>
        <?php } ?>
    </select>
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