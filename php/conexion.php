<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "geshot";
$con = mysqli_connect($host, $user, $password, $db) or die('No se puedo conectar a la base de datos'. mysqli_error($con));
?>
