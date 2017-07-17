<?php
include 'conexion.php';
?>

<div class="row">
    <!-- Tiles -->
    <article class="col s12">
        <div class="full-width center-align" style="margin: 40px 0;">
            <div class="tile">
                <div class="tile-icon"><i class="zmdi zmdi-mail-send"></i></div>
                <div class="tile-caption">
                    
                    <?php
                        include './metodos/constantes.php';

                        $stmt = mysqli_prepare($con, QUERY_CANTIDAD_HUESPEDES);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_bind_result($stmt, $cant);
                        mysqli_stmt_fetch($stmt);
                        echo '<span class="center-align">' . $cant . '</span>';
                        mysqli_stmt_close($stmt);
                    ?>

                    <p class="center-align">Huespedes Registrados</p>
                </div>
                <a href="#" class="tile-link waves-effect waves-light">View Details &nbsp; <i class="zmdi zmdi-caret-right-circle"></i></a>
            </div>
            <div class="tile">
                <div class="tile-icon"><i class="zmdi zmdi-shopping-cart"></i></div>
                <div class="tile-caption">
                    <?php
                        include './metodos/constantes.php';

                        $stmt = mysqli_prepare($con, QUERY_CANTIDAD_HABITACIONES_DISP);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_bind_result($stmt, $cant);
                        mysqli_stmt_fetch($stmt);
                        echo '<span class="center-align">' . $cant . '</span>';
                        mysqli_stmt_close($stmt);
                    ?>
                    <p class="center-align">Piezas Disponibles</p>
                </div>
                <a href="#" class="tile-link waves-effect waves-light">View Details &nbsp; <i class="zmdi zmdi-caret-right-circle"></i></a>
            </div>
            <div class="tile">
                <div class="tile-icon"><i class="zmdi zmdi-card"></i></div>
                <div class="tile-caption">
                    <?php
                        include './metodos/constantes.php';

                        $stmt = mysqli_prepare($con, QUERY_CANTIDAD_HABITACIONES_OCUP);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_bind_result($stmt, $cant);
                        mysqli_stmt_fetch($stmt);
                        echo '<span class="center-align">' . $cant . '</span>';
                        mysqli_stmt_close($stmt);
                    ?>
                    <p class="center-align">Habitaciones Ocupadas</p>
                </div>
                <a href="#" class="tile-link waves-effect waves-light">View Details &nbsp; <i class="zmdi zmdi-caret-right-circle"></i></a>
            </div>
        </div>
    </article>
</div>

<script type="text/javascript">
    
    

</script>
