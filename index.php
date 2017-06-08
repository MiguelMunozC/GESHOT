<?php
session_start(); 
include "php/conexion.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Login GesHot</title>

        <!-- Normalize CSS -->
        <link rel="stylesheet" href="css/normalize.css">

        <!-- Materialize CSS -->
        <link rel="stylesheet" href="css/materialize.min.css">

        <!-- Material Design Iconic Font CSS -->
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">

        <!-- Malihu jQuery custom content scroller CSS -->
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">

        <!-- Sweet Alert CSS -->
        <link rel="stylesheet" href="css/sweetalert.css">

        <!-- MaterialDark CSS -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="font-cover" id="login">
        <div class="container-login center-align">
            <div style="margin:15px 0;">
                <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
                <p>Inicia sesión con tu cuenta</p>   
            </div>
            <form action="php/validarUser.php" method="post">
                <div class="input-field">
                    <input name="username" type="text" class="validate">
                    <label for="username"><i class="zmdi zmdi-account"></i> Nombre</label>
                </div>
                <div class="input-field col s12">
                    <input name="password" type="password" class="validate">
                    <label for="password"><i class="zmdi zmdi-lock"></i> Contraseña</label>
                </div>
                <button type="submit" value="acceder" class="waves-effect waves-teal btn-flat">Ingresar <i class="zmdi zmdi-mail-send"></i></button>
            </form>
        </div>

        <!-- Sweet Alert JS -->
        <script src="js/sweetalert.min.js"></script>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>

        <!-- Materialize JS -->
        <script src="js/materialize.min.js"></script>

        <!-- Malihu jQuery custom content scroller JS -->
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

        <!-- MaterialDark JS -->
        <script src="js/main.js"></script>
    </body>
</html>

