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
    </head>

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
                        <a href="php/formularioHuesped.php" class="waves-effect waves-light"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i> Ingreso Huesped</a>
                    </li>
                    <li class="NavLateralDivider"></li>
                    <li>
                        <a href="#" class="NavLateral-DropDown  waves-effect waves-light"><i class="zmdi zmdi-language-css3 zmdi-hc-fw"></i> <i class="zmdi zmdi-chevron-down NavLateral-CaretDown"></i> Registro Habitación</a>
                        <ul class="full-width">
                            <li><a href="typography-shadow.html" class="waves-effect waves-light">Check In</a></li>
                            <li class="NavLateralDivider"></li>
                            <li><a href="table.html" class="waves-effect waves-light">Check Out</a></li>
                        </ul>
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

        <div class="row">
            <!-- Tiles -->
            <article class="col s12">
                <div class="full-width center-align" style="margin: 40px 0;">
                    <div class="tile">
                        <div class="tile-icon"><i class="zmdi zmdi-mail-send"></i></div>
                        <div class="tile-caption">
                            <span class="center-align">0</span>
                            <p class="center-align">Huespedes Registrados</p>   
                        </div>
                        <a href="#" class="tile-link waves-effect waves-light">View Details &nbsp; <i class="zmdi zmdi-caret-right-circle"></i></a>
                    </div>
                    <div class="tile">
                        <div class="tile-icon"><i class="zmdi zmdi-shopping-cart"></i></div>
                        <div class="tile-caption">
                            <span class="center-align">0</span>
                            <p class="center-align">Piezas Disponibles</p>   
                        </div>
                        <a href="#" class="tile-link waves-effect waves-light">View Details &nbsp; <i class="zmdi zmdi-caret-right-circle"></i></a>
                    </div>
                    <div class="tile">
                        <div class="tile-icon"><i class="zmdi zmdi-card"></i></div>
                        <div class="tile-caption">
                            <span class="center-align">0</span>
                            <p class="center-align">Habitaciones Ocupadas</p>   
                        </div>
                        <a href="#" class="tile-link waves-effect waves-light">View Details &nbsp; <i class="zmdi zmdi-caret-right-circle"></i></a>
                    </div>
                </div>   
            </article>
        </div>

        <!-- Footer -->   
        <footer class="footer-MaterialDark">
            <div class="NavLateralDivider"></div>
            <div class="footer-copyright">
                <div class="container center-align">
                    © 2017 twk corporations
                </div>
            </div>
        </footer>
    </section>

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
</html>