<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Examen_Grupo05_Miercoles/Models/Conexion.php";

class CasasModel
{

    private $error;

    public function ConsultarCasas()
    {
        $conn = OpenDatabase();
        return $conn->query("CALL ConsultarCasas()");
    }

    public function ObtenerDisponibles()
    {
        $conn = OpenDatabase();
        return $conn->query("SELECT * FROM CasasSistema WHERE UsuarioAlquiler IS NULL");
    }

    public function ObtenerTodas()
    {
        $conn = OpenDatabase();
        return $conn->query("SELECT * FROM CasasSistema");
    }

    public function Alquilar($id, $usuario)
    {
        $conn = OpenDatabase();
        $stmt = $conn->prepare("CALL AlquilarCasa(?,?)");
        $stmt->bind_param("is", $id, $usuario);
        $result = $stmt->execute();
        if (!$result) {
            $this->error = $stmt->error;
        }
        $stmt->close();
        $conn->close();
        return $result;
    }

    public function Liberar($id)
    {
        $conn = OpenDatabase();
        $stmt = $conn->prepare("CALL LiberarCasa(?)");
        $stmt->bind_param("i", $id);
        $result = $stmt->execute();
        if (!$result) {
            $this->error = $stmt->error;
        }
        $stmt->close();
        $conn->close();
        return $result;
    }

    public function getError()
    {
        return $this->error;
    }
}
