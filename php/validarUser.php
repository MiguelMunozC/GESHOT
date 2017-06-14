<?php

include 'conexion.php';
if (!empty($_POST)) {
    $loginNombre = $_POST["username"];
    $loginPassword = ($_POST["password"]);

    $consulta = "SELECT ID_usuario FROM `usuarios` WHERE `username`=\"$loginNombre\" AND `pass`=\"$loginPassword\"";
    $result = $con->query($consulta);
    if ($result->num_rows > 0) {
        echo "http://localhost/GESHOT/php/formularioHuesped.php";
    } else {
        echo "-1";
    }
} else {
    echo "-1";
}
?>


