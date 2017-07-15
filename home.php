<?php
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>GesHot</title>

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

        <link rel="stylesheet" href="css/estilos.css">

        <!--Molina-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="js/form.js" type="text/javascript"></script>   
    </head>
    <body>
        <!-- Nav Lateral -->
        <section class="NavLateral full-width">
            <div class="NavLateral-FontMenu full-width ShowHideMenu"></div>
            <div class="NavLateral-content full-width">
                <header class="NavLateral-title full-width center-align">
                    GesHot <i class="zmdi zmdi-close NavLateral-title-btn ShowHideMenu"></i>
                </header>
                <figure class="full-width NavLateral-logo">
                    <img src="assets/img/hotel.jpg" alt="material-logo" class="responsive-img center-box">
                </figure>
                <div class="NavLateral-Nav">
                    <ul class="full-width">
                        <li>
                            <a id="RegistroHuesped" href="#" class="waves-effect waves-light"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i> Ingreso Huesped</a>
                        </li>
                        <li class="NavLateralDivider"></li>
                        <li>

                            <a id="checkin" href="#" class="waves-effect waves-light"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i> Check </a>
                        </li>
                        <li class="NavLateralDivider"></li>
                        <li>
                            <a id="Registros" href="#" class="waves-effect waves-light"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i> Registros</a>
                        </li>
                        <li>
                            <a id="AsignacionHabitacion" href="#" class="waves-effect waves-light"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i> Asignación Habitación</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Page content -->
        <section class="ContentPage full-width">
            <!-- Nav Info -->
            <div class="ContentPage-Nav full-width">
                <ul class="full-width">
                    <li><figure><img src="assets/img/user.png" alt="UserImage"></figure></li>
                    <li style="padding:0 5px;">Recepcionista Name</li>
                    <li><a href="#" class="tooltipped waves-effect waves-light btn-ExitSystem" data-position="bottom" data-delay="50" data-tooltip="Logout"><i class="zmdi zmdi-power"></i></a></li>
                </ul>
            </div>

            <!-- asdasdasd-->
            <div id="centro">
                <?php require("php/inicial.php"); ?>
            </div>


        </section>
        <!-- Footer -->
        <footer class="footer-MaterialDark">
            <div class="NavLateralDivider"></div>
            <div class="footer-copyright">
                <div class="container center-align">
                    © 2017 GESHOT corporations
                </div>
            </div>
        </footer>
    </body>
    <!-- Sweet Alert JS -->
    <script src="js/sweetalert.min.js"></script>

    <!-- jQuery -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>

    <!-- Materialize JS -->
    <script src="js/materialize.min.js"></script>

    <!-- Malihu jQuery custom content scroller JS -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- MaterialDark JS -->
    <script src="js/main.js"></script>
    <script src="js/dashboard.js"></script>
</html>
