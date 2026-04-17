<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Examen_Grupo05_Miercoles/Models/CasasModel.php";

$model = new CasasModel();

if(isset($_POST["btnAlquilar"])) {
    $model->Alquilar($_POST["IdCasa"], $_POST["Usuario"]);

    header("Location: /Examen_Grupo05_Miercoles/Views/vHome/consulta.php");
}
?>