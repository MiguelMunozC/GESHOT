<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php

include "conexion/conexion.php";

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="registrarHuesped.php" method="post">
            <h2>Registro Huesped</h2>
            
            <table>
                <tr>
                    <th>Nombre:</th>
                    <th> <input type="text" name="nombreHuesped" value="" required /></th>
                </tr>
                <tr>
                    <th>Apellido: </th>
                    <td><input type="text" name="apellidoHuesped" value="" required /></td>
                </tr>
                <tr>
                    <th>Nacionalidad</th>
                    <td><input type="text" name="nacionalidad" value="" required/></td>
                </tr>
                <tr>
                    <th>Fecha Nacimiento: </th>
                    <td><input type="date" name="fechaNacimiento" required/></td>
                </tr>
                <tr>
                    <th>DNI: </th>
                    <td><input type="text" name="dni" value="" required/></td>
                </tr>
                <tr>
                    <th>Domicilio: </th>
                    <td><input type="text" name="domicilio" value="" /></td>
                </tr>
                 <tr>
                    <th>Ocupacion: </th>
                    <td><input type="text" name="ocupacion" value="" /></td>
                </tr>
                 <tr>
                    <th>Email: </th>
                    <td><input type="text" name="email" value="" required /></td>
                </tr>
                
            </table>
            <BR>
            <input type="submit" value="Submit" name="Submit" />
            <input type="reset" value="Reset" name="Reset" />
        </form>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
