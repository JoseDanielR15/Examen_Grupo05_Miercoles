<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once $_SERVER["DOCUMENT_ROOT"] . "/Examen_Grupo05_Miercoles/Models/CasasModel.php";

$model = new CasasModel();

if(isset($_POST["btnAlquilar"])) {

    $id = $_POST["IdCasa"];
    $usuario = $_POST["Usuario"];

    if($model->Alquilar($id, $usuario)) {
        header("Location: /Examen_Grupo05_Miercoles/Views/vHome/consulta.php");
        exit();
    } else {
        echo "Error al alquilar: " . $model->getError();
    }
}
