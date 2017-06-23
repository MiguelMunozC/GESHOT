<?php

include 'conexion.php';
echo '$_POST["fechaNacimiento"]';
if (!empty($_POST)) {
    if (isset($_POST["nombreHuesped"]) && isset($_POST["apellidoHuesped"])  && isset($_POST["dni"]) && isset($_POST["nacionalidad"]) && isset($_POST["domicilio"]) && isset($_POST["ocupacion"]) && isset($_POST["fechaNacimiento"]) && isset($_POST["email"]) && isset($_POST["nHabitacion"])) {
        if ($_POST["nombreHuesped"] != "" && $_POST["apellidoHuesped"] != "" && $_POST["nacionalidad"] != "" && $_POST["fechaNacimiento"] != "" && $_POST["dni"] != "" && $_POST["email"] != "") {

            $sql = "INSERT INTO huespedes (nombre_huesped,apellido_huesped,DNI,nacionalidad,domicilio,ocupacion,fecha_nacimiento,email_huesped,ID_habitacion) VALUES (\"$_POST[nombreHuesped]\",\"$_POST[apellidoHuesped]\",\"$_POST[dni]\",\"$_POST[nacionalidad]\",\"$_POST[domicilio]\",\"$_POST[ocupacion]\",\"$_POST[fechaNacimiento]\",\"$_POST[email]\",\"$_POST[nHabitacion]\")";

            $query = $con->query($sql);
            echo "sql " . $sql;
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
