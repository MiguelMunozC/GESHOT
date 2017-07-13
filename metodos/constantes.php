<?php
define("QUERY_ESTADO_HABITACION", "SELECT ID_habitacion, numero_pieza FROM habitaciones WHERE ID_estado_habitacion =?");
define("QUERY_INSERT_HUESPED", "INSERT INTO huespedes (nombre_huesped,apellido_huesped,DNI,nacionalidad,domicilio,ocupacion,fecha_nacimiento,email_huesped) VALUES (?,?,?,?,?,?,?,?)");
?>