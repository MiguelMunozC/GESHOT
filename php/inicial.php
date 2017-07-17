<?php
include 'conexion.php';
?>

<div class="row">
    <!-- Tiles -->
    <article class="col s12">
        <div class="full-width center-align" style="margin: 40px 0;">
            <div class="tile">
                <div class="tile-icon"><i class="material-icons">accessibility</i></div>
                <div class="tile-caption">
                    
                    <?php
                        include './metodos/constantes.php';

                        $stmt = mysqli_prepare($con, QUERY_CANTIDAD_HUESPEDES);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_bind_result($stmt, $cant);
                        mysqli_stmt_fetch($stmt);
                        if ($cant != null){
                            echo '<span class="center-align">' . $cant . '</span>';
                        }else{
                            echo '<span class="center-align">0</span>';
                        }
                        mysqli_stmt_close($stmt);
                    ?>

                    <p class="center-align">Huespedes Registrados</p>
                </div>
            </div>
            <div class="tile">
                <div class="tile-icon"><i class="material-icons">check_circle</i></div>
                <div class="tile-caption">
                    <?php
                        include './metodos/constantes.php';

                        $stmt = mysqli_prepare($con, QUERY_CANTIDAD_HABITACIONES_DISP);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_bind_result($stmt, $cant);
                        mysqli_stmt_fetch($stmt);
                        if ($cant != null){
                            echo '<span class="center-align">' . $cant . '</span>';
                        }else{
                            echo '<span class="center-align">0</span>';
                        }
                        mysqli_stmt_close($stmt);
                    ?>
                    <p class="center-align">Piezas Disponibles</p>
                </div>            
            </div>
            <div class="tile">
                <div class="tile-icon"><i class="material-icons">do_not_disturb_on</i></div>
                <div class="tile-caption">
                    <?php
                        include './metodos/constantes.php';

                        $stmt = mysqli_prepare($con, QUERY_CANTIDAD_HABITACIONES_OCUP);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_bind_result($stmt, $cant);
                        mysqli_stmt_fetch($stmt);
                        if ($cant != null){
                            echo '<span class="center-align">' . $cant . '</span>';
                        }else{
                            echo '<span class="center-align">0</span>';
                        }
                        mysqli_stmt_close($stmt);
                    ?>
                    <p class="center-align">Habitaciones Ocupadas</p>
                </div>
            </div>
        </div>
    </article>
</div>

<script type="text/javascript">
    
    

</script>
