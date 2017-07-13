<?php
include 'conexion.php';
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
       <h2 class="center-align">CHECK REGISTRO</h2>

        <div align="center">

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

</body>

</html>
