<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Examen_Grupo05_Miercoles/Models/Conexion.php";

class CasasModel {

    public function ConsultarCasas() {
        $conn = OpenDatabase();
        return $conn->query("CALL ConsultarCasas()");
    }

    public function ObtenerDisponibles() {
        $conn = OpenDatabase();
        return $conn->query("SELECT * FROM CasasSistema WHERE UsuarioAlquiler IS NULL");
    }

    public function Alquilar($id, $usuario) {
        $conn = OpenDatabase();
        $stmt = $conn->prepare("CALL AlquilarCasa(?,?)");
        $stmt->bind_param("is", $id, $usuario);
        return $stmt->execute();
    }
}
?>