<?php
include 'conexion.php';
?>



<div class="container">
    <h2 class="center-align">Check Registro</h2>

    <div align="center">
        <form action="php/registracheck.php" method="post"  id="form" onreset="return validacion3()">

            <div class="col s6">

                <i class="material-icons prefix"></i><label>Huesped</label>
                <select name="huesped" id="huesped" >

                    <option value="" disabled selected> </option>

                    <?php
                    include '../metodos/constantes.php';



                    $stmt = mysqli_prepare($con, QUERY_HUESPED_HABITACION);
                    mysqli_stmt_bind_result($stmt, $id_huesped, $nombre_huesped, $apellido_huesped);
                    mysqli_stmt_execute($stmt);
                    while (mysqli_stmt_fetch($stmt)) {

                        echo '<option value="' . $id_huesped . '">' . $nombre_huesped . " " . $apellido_huesped . '</option>';
                    }
                    ?>
                </select>
            </div>

            <div class="col s6">
                <label>CHECK IN</label>
                <div class="input-field">

                    <input type="date" class="datepicker" name="Checkin" id="checkin" required>
                </div>
            </div>
            <div class="col s6">
                <label>CHECK OUT</label>
                <div class="input-field">

                    <input type="date" class="datepicker" name="Checkout" id="checkout" required>
                </div>
            </div>
            <div class="row">
                <div class="input-field">
                    <i class="material-icons prefix">payment</i>
                    <input value="" name="costo_total" id="costo_costal" type="int" class="validate" required>
                    <label class="active" for="costo_costal">costo_total</label>
                </div>
            </div>


            <button class="btn waves-effect waves-light" type="submit" name="enviar" id="enviar" >Registrar
                <i class="material-icons right">send</i>
            </button>
            </p>
        </form>

    </div>
    <script type="text/javascript">


        $(document).ready(function () {
            Materialize.updateTextFields();

            $('select').material_select();  //Se utiliza para lista de habitaciones desplegables


            $('.datepicker').pickadate({
                format: 'yyyy/mm/dd',
                startDate: '-3d'
            });
        }
        );

    </script>

</div>
