<?php
define("QUERY_ESTADO_HABITACION", "SELECT ID_habitacion, numero_pieza FROM habitaciones WHERE ID_estado_habitacion =?");
define("QUERY_HUESPED_HABITACION", "SELECT * FROM huespedes WHERE ID_habitacion IS NOT NULL =?");

?>