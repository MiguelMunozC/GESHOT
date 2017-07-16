<?php
define("QUERY_ESTADO_HABITACION", "SELECT ID_habitacion, numero_pieza FROM habitaciones WHERE ID_estado_habitacion =?");

define("QUERY_HUESPED_HABITACION", "SELECT id_huesped, nombre_huesped, apellido_Huesped FROM huespedes WHERE ID_habitacion IS NOT NULL");


define("QUERY_INSERT_HUESPED", "INSERT INTO huespedes (nombre_huesped,apellido_huesped,DNI,nacionalidad,domicilio,ocupacion,fecha_nacimiento,email_huesped) VALUES (?,?,?,?,?,?,?,?)");

define("QUERY_HABITACION", "SELECT ID_habitacion, numero_pieza FROM habitaciones WHERE 1");

define("QUERY_HUESPEDE", "SELECT ID_huesped, nombre_huesped, apellido_huesped FROM huespedes WHERE ID_habitacion is null ");



?>
