<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Examen_Grupo05_Miercoles/Views/layout.php";
?>

<!DOCTYPE html>
<html>

<?php MostrarCSS(); ?>

<body>

<?php MostrarHeader(); ?>
<?php MostrarNav(); ?>

<div class="container">

<div class="container-box text-center">

<h2>Bienvenido</h2>
<p>Sistema de alquiler de casas</p>

<a href="consulta.php" class="btn btn-primary">
    <i class="fas fa-arrow-right"></i> Ingresar
</a>

</div>
</div>

<?php MostrarFooter(); ?>
<?php MostrarJS(); ?>

</body>
</html>