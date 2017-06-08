<?php

include 'conexion.php';
if (!empty($_POST)) {
    $loginNombre = $_POST["username"];
    $loginPassword = ($_POST["password"]);

    $consulta = "SELECT ID_usuario FROM `usuarios` WHERE `username`=\"$loginNombre\" AND `pass`=\"$loginPassword\"";
    echo 'query ' . $consulta;
    //$query = $con->query($sql);
    $result = $con->query($consulta);
    if ($result->num_rows > 0) {
        header('Location: formularioHuesped.php');
    } else {
         header('Location: \Login\index.php');
    }
} else {
    print "<script>alert(\"error al loggear.\");</script>";
}
?>


