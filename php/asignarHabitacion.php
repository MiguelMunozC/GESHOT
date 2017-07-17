
<?php
include './conexion.php';
?>


<div class="container">
  <span class="blue-text text-darken-2"><h2 class="center-align">Asignación Habitación</h2></span>
  <form action= "" method="post"  id="victor">
  </form>

  <div class="row">
    <article class="col s6 offset-s3">
      <form action="registrarHuesped.php" method="post"  id="form" onreset="return validacion()">

        <div class="row">
          <i class="material-icons prefix">hotel</i><label>Habitacion</label>
          <select name="nHabitacion" id="nHabitacion" >

            <option value="" disabled selected>Selecciónar Habitacion:</option>
            <?php
            include '../metodos/constantes.php';
            $stmt = mysqli_prepare($con, QUERY_HABITACION);
            mysqli_stmt_bind_result($stmt, $id, $nombre);
            mysqli_stmt_execute($stmt);
            while (mysqli_stmt_fetch($stmt)) {
              echo '<option value="' . $id . '">' . $nombre . '</option>';
            }
            ?>
          </select>
        </div>



        <div class="row">
          <i class="material-icons prefix">account_circle</i>
          <div class="input-field col s12">
            <select name="nHabitacion" id="nHabitacion" >
              <option value="" disabled selected>Huésped:</option>
              <?php
              include '../metodos/constantes.php';
              $stmt = mysqli_prepare($con, QUERY_HUESPEDE);
              mysqli_stmt_bind_result($stmt, $id, $nombre, $apellido);
              mysqli_stmt_execute($stmt);
              while (mysqli_stmt_fetch($stmt)) {
                echo '<option value="' . $id . '">' . $nombre." ",$apellido . '</option>';
              }
              ?>
            </select>
            <label for="icon_prefix">Selecciona Huésped</label>
          </div>
          <p class="center-align">
            <button class="btn waves-effect waves-yellow red" type="reset" name="agregar" id="agregar" >Agregar
              <i class="material-icons right">done</i>
            </button>
            <button class="btn waves-effect waves-yellow red" type="submit" name="enivar" id="enivar" >Finalizar
              <i class="material-icons right">send</i>
            </button>
          </p>
          <p class="center-align">
            <button class="btn waves-effect waves-yellow red" type="button" id="boton" name="boton" onclick="location.href = '../home.php'">Cancelar
              <i class="material-icons right">clear</i>
            </button>
          </p>
        </div>
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

</div>
