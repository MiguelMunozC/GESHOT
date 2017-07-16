

<?php
include 'conexion.php';
$consulta="SELECT * FROM huespedes where ID_habitacion";
$respuesta=$con ->query($consulta);

?>

<div class = "container">

 	<div class="row">
 		<table class= "striped" style="width:100%"	>  

  			<div>
   				<h5 class="left-align">Modificador</h5>
  			</div> 

            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th>Nacionalidad</th>
                <th>domicilio</th>
                <th>Ocupacion</th>
                <th>Fecha de Nacimiento</th>
                <th>E-Mail</th>
                <th>ID habitacion<th>
                <th><th>
               
            </tr> 

            
			<?php 
			while ($ver=$respuesta->fetch_array()):
			?>

			<tr>
				<td><?php echo $ver["nombre_huesped"]; ?></td>
				<td><?php echo $ver["apellido_huesped"]; ?></td>
				<td><?php echo $ver["DNI"]; ?></td>
				<td><?php echo $ver["nacionalidad"]; ?></td>
				<td><?php echo $ver["domicilio"]; ?></td>
				<td><?php echo $ver["ocupacion"]; ?></td>
				<td><?php echo $ver["fecha_nacimiento"]; ?></td>
				<td><?php echo $ver["email_huesped"]; ?></td>
				<td><?php echo $ver["ID_habitacion"]; ?></td>
				<td><a class="btn btn-floating btn-large cyan pulse"><i class="material-icons">edit</i></a></td>
				<td><a class="btn-floating btn-large waves-effect waves-light red pulse"><i class="material-icons">delete</i></a></td>
			</tr>
            
            <?php endwhile;?>

 		</table>
 	</div>
</div>