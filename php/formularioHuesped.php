<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
include "conexion.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../css/materialize/css/materialize.css" rel="stylesheet" type="text/css"/>
    <body>
        <form action="registrarHuesped.php" method="post" class="col s12">
            <h2>Formulario Huesped</h2>


            <div class="row" >
                <div class="input-field col s3">
                    <input value="" name= "nombreHuesped" id="nombreHuesped" type="text" class="validate" required>
                    <label class="active"  for="nombreHuesped"  >Nombre</label> 

                </div>

                <div class="input-field col s3">
                    <input value="" name= "apellidoHuesped" id="apellidoHuesped" type="text" class="validate" required>
                    <label class="active" for="apellidoHuesped">Apellido</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input value="" name="nacionalidad" id="nacionalidad" type="text" class="validate" required>
                    <label class="active" for="nacionalidad">Nacionalidad</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input value="" name="fechaNacimiento" id="fechaNacimiento" type="text" class="validate" required>
                    <label class="active" for="fechaNacimiento">Fecha Nacimiento</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input value="" name="dni" id="dni" type="text" class="validate" required>
                    <label class="active" for="dni">DNI</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input value="" name="domicilio" id="domicilio" type="text" class="validate" >
                    <label class="active" for="domicilio">Domicilio</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input value="" name="ocupacion" id="ocupacion" type="text" class="validate" >
                    <label class="active" for="ocupacion">Ocupacion</label>
                </div>
            </div>
            
            <div class="row">
                <div class="input-field col s6">
                    <input name="email" id="email" type="email" class="validate">
                    <label class="active" for="email" data-error="wrong" data-success="right">Email</label>
                </div>
            </div>

            <button class="btn waves-effect waves-light btn" type="reset" name="action">Reset</button>
            <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                <i class="material-icons right"></i>
            </button>


        </form>

        <?php
// put your code here
        ?>
    </body>
</html>
