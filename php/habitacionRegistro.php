<?php
include 'conexion.php';
?>



    <div class="container">
        <h1 class="center-align">CHECK REGISTRO</h1>

        <div align="center">

            <div class="row">
                <i class="material-icons prefix"></i><label>HU&Eacute;SPED</label>
                <select name="huesped" id="huesped" >

                    <option value="" disabled selected> Selecciónar: </option>
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

            <div class="row">
                <label>CHECK IN</label>
                <div class=" col s12">

                    <input type="date" class="datepicker" name="Checkin" id="checkin" required>
                </div>
            </div>
            <div class="row">
                <label>CHECK OUT</label>
                <div class=" col s12">

                    <input type="date" class="datepicker" name="Checkout" id="checkout" required>
                </div>
            </div>
            <button>Guardar</button>
        </p>
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



            }
            );

        </script>

</div>
