<?php

include 'conexion.php';
include '../metodos/constantes.php';

if (!empty($_POST)) {
    if (isset($_POST["nombreHuesped"]) && isset($_POST["apellidoHuesped"])  && isset($_POST["dni"]) && isset($_POST["nacionalidad"]) && isset($_POST["domicilio"]) && isset($_POST["ocupacion"]) && isset($_POST["fechaNacimiento"])&& isset($_POST["email"])) {
        if ($_POST["nombreHuesped"] != "" && $_POST["apellidoHuesped"] != "" && $_POST["nacionalidad"] != "" && $_POST["fechaNacimiento"] != "" && $_POST["dni"] != "" && $_POST["email"] != "") {
            
            $query = mysqli_prepare($con, QUERY_INSERT_HUESPED);            
            mysqli_stmt_bind_param($query, "ssssssss", $_POST["nombreHuesped"], $_POST["apellidoHuesped"], $_POST["dni"], $_POST["nacionalidad"], $_POST["domicilio"], $_POST["ocupacion"], $_POST["fechaNacimiento"], $_POST["email"]);
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
