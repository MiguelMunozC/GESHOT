<?php

include 'conexion.php';

if (!empty($_POST)) {
    if (isset($_POST["nombreHuesped"]) && isset($_POST["apellidoHuesped"])  && isset($_POST["dni"]) && isset($_POST["nacionalidad"]) && isset($_POST["domicilio"]) && isset($_POST["ocupacion"]) && isset($_POST["dia"])&& isset($_POST["mes"])&& isset($_POST["anio"]) && isset($_POST["email"]) && isset($_POST["nHabitacion"])) {
        if ($_POST["nombreHuesped"] != "" && $_POST["apellidoHuesped"] != "" && $_POST["nacionalidad"] != "" && $_POST["dia"] != ""&& $_POST["mes"] != ""&& $_POST["anio"] != "" && $_POST["dni"] != "" && $_POST["email"] != "") {
            $fecha = $_POST["anio"]."-".$_POST["mes"]."-".$_POST["dia"];
            $sql = "INSERT INTO huespedes (nombre_huesped,apellido_huesped,DNI,nacionalidad,domicilio,ocupacion,fecha_nacimiento,email_huesped,ID_habitacion) VALUES (\"$_POST[nombreHuesped]\",\"$_POST[apellidoHuesped]\",\"$_POST[dni]\",\"$_POST[nacionalidad]\",\"$_POST[domicilio]\",\"$_POST[ocupacion]\",\"$fecha\",\"$_POST[email]\",\"$_POST[nHabitacion]\")";

            $query = $con->query($sql);
            
            if ($query != null) {
                print "<script>alert(\"Agregado exitosamente.\");</script>";
            } else {
                print "<script>alert(\"No se pudo agregar.\");</script>";
            }
        }
    }
} else {
    print "<script>alert(\"nada que cargar.\");</script>";
}
?>
