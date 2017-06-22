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
        <h2 class="center-align">Formulario Huesped</h2>


        <div class="row">
            <article class="col s6 offset-s3">
                <form action="registrarHuesped.php" method="post"  id="form">

                    <div class="row" >
 
                        <div class="input-field col s6">
                             <i class="material-icons prefix">perm_identity</i>
                            <input  value="" name= "nombreHuesped" id="nombreH" type="text" class="validate"  required>
                            <label class="active"  for="nombreHuesped" >Nombre</label> 
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">person_pin</i>
                            <input value="" name= "apellidoHuesped" id="apellidoHuesped" type="text" class="validate" required>
                            <label class="active" for="apellidoHuesped">Apellido</label>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="input-field">
                            <i class="material-icons prefix">portrait</i>
                            <input value="" name="nacionalidad" id="nacionalidad" type="text" class="validate" required>
                            <label class="active" for="nacionalidad">Nacionalidad</label>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="input-field">
                            <i class="material-icons prefix">date_range</i>
                            <input value="" name="fechaNacimiento" id="fechaNacimiento" type="text" class="validate" required>
                            <label class="active" for="fechaNacimiento">Fecha Nacimiento</label>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="input-field">
                            <i class="material-icons prefix">account_box</i>
                            <input value="" name="dni" id="dni" type="text" class="validate" required >
                            <label  class="active" for="dni">DNI</label>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="input-field">
                            <i class="material-icons prefix">home</i>
                            <input value="" name="domicilio" id="domicilio" type="text" class="validate" >
                            <label class="active" for="domicilio">Domicilio</label>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="input-field">
                            <i class="material-icons prefix">work</i>
                            <input value="" name="ocupacion" id="ocupacion" type="text" class="validate" >
                            <label class="active" for="ocupacion">Ocupacion</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field">
                            <i class="material-icons prefix">email</i>
                            <input name="email" id="email" type="email" class="validate" value="" >
                            <label class="active" for="email" data-error="wrong" data-success="right">Email</label>
                        </div>
                    </div>

                    <p class="center-align"> 
                        <button class="btn waves-effect waves-light btn" type="reset" name="action" id="agregar" >Agregar
                        <i class="material-icons right">replay</i></button>
                        <button class="btn waves-effect waves-light" type="submit" name="action" >Agregar y Finalizar
                            <i class="material-icons right">send</i>
                        </button>
                    </p>



                </form>
            </article>

        </div>
        <script src="../js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script type="text/javascript">

            $(function () {

                $("#agregar").click(function () {
                    var url = "registrarHuesped.php";

                    $.ajax({
                        type: "POST",
                        url: url,
                        data: $("form").serialize(),
                        success: function () {
                            alert("Agregado Exitosamente");
                        }
                    });

                });
            });

        </script>




    </body>
</html>
