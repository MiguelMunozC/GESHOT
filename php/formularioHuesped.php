<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
session_start();
include "conexion.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">     
    </head>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../css/materialize/css/materialize.css" rel="stylesheet" type="text/css"/>
    <script src="../js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="../js/materialize.min.js" type="text/javascript"></script>
    <script src="../js/form.js" type="text/javascript"></script>
    <body class="container">
        <h2 class="center-align">Formulario Huesped</h2>


        <div class="row">
            <article class="col s6 offset-s3">
                <form action="registrarHuesped.php" method="post"  id="form" onreset="return validacion()">

                    <div class="row" >

                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <input  value="" name= "nombreHuesped" id="nombreHuesped" type="text" class="validate"  required>
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
                            <i class="material-icons prefix">email</i>
                            <input name="email" id="email" type="email" class="validate" value="" required>
                            <label class="active" for="email" data-error="wrong" data-success="right">Email</label>
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
                        <label>Fecha de nacimiento</label>
                        <div class=" col s12">

                            <input type="date" class="datepicker" name="fechaNacimiento" id="fechaNacimiento" required>
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
                        <i class="material-icons prefix">hotel</i><label>Habitacion</label>
                        <select name="nHabitacion" id="nHabitacion" >

                            <option value="" disabled selected>Selecciónar Habitacion:</option>
                            <?php
                            $query = $con->query("SELECT * FROM habitaciones WHERE ID_estado_habitacion = 1");

                            while ($valores = mysqli_fetch_array($query)) {

                                echo '<option value="' . $valores[ID_habitacion] . '">' . $valores[numero_pieza] . '</option>';
                            }
                            ?>
                        </select>
                    </div>


                    <p class="center-align"> 
                        <button class="btn waves-effect waves-light" type="reset" name="agregar" id="agregar" >Agregar
                            <i class="material-icons right">replay</i></button>
                        <button class="btn waves-effect waves-light" type="submit" name="enivar" id="enivar" >Agregar y Finalizar
                            <i class="material-icons right">send</i>
                        </button>
                    </p>



                </form>
            </article>

        </div>


        <script type="text/javascript">


            $(document).ready(function () {
                Materialize.updateTextFields();

                $('select').material_select();  //Se utiliza para lista de habitaciones desplegables


                $('.datepicker').pickadate({
                    format: 'yyyy/mm/dd',
                    startDate: '-3d'
                });

                
                 $("#agregar").click(function () {
                    // se utiliza para agregar mas huespedes
                    if (validacion2()) {
                       
                        var url = "registrarHuesped.php";

                        $.ajax({
                            type: "POST",
                            url: url,
                            data: $("form").serialize(),
                            success: function () {
                                alert("Agregado Exitosamente");

                            }
                        });
                    }
                });



            });

        </script>




    </body>
</html>
