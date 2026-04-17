<?php
function OpenDatabase() {
    return new mysqli("127.0.0.1:3307", "root", "", "CasoEstudioMN");
}
?>