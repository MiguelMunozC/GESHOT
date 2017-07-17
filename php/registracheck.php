<?php

include 'conexion.php';
include '../metodos/constantes.php';

if (!empty($_POST)) {
    if (isset($_POST["id_huesped"]) && isset($_POST["apellido_huesped"])  && isset($_POST["checkin"]) && isset($_POST["checkout"]) && isset($_POST["costo_total"])) {
        if ($_POST["id_huesped"] != "" && $_POST["apellido_huesped"] != "" && $_POST["checkin"] != "" && $_POST["checkout"] != "" && $_POST["costototal"] != "" ) {
            
            $query = mysqli_prepare($con, QUERY_INSERT_REGISTRO);            
            mysqli_stmt_bind_param($query, "ssssssss", $_POST["$id_huesped"], $_POST["$apellido_huesped"], $_POST["checkin"], $_POST["checkout"], $_POST["costo_total"]);
            mysqli_stmt_execute($query);
            if ($query != null) {
                print "<script>alert(\"Agregado exitosamente.\");</script>";
                header ("Location: ../home.php");
            } else {
                print "<script>alert(\"No se pudo agregar.\");</script>";
            }
        }
    }
} else {
    print "<script>alert(\"nada que cargar.\");</script>";
}
?>
