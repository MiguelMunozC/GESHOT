<?php
include 'conexion/conexion.php';
if(!empty($_POST)){
	if(isset($_POST["nombreHuesped"]) &&isset($_POST["apellidoHuesped"]) &&isset($_POST["nacionalidad"]) &&isset($_POST["fechaNacimiento"]) &&isset($_POST["dni"])&&isset($_POST["domicilio"]) &&isset($_POST["ocupacion"]) &&isset($_POST["email"])){
		if($_POST["nombreHuesped"]!=""&& $_POST["apellidoHuesped"]!=""&&$_POST["nacionalidad"]!=""&&$_POST["fechaNacimiento"]!=""&&$_POST["dni"]!=""&&$_POST["email"]!=""){
			
			echo "hola";
			$sql = "insert into huespedes(nombre_huesped,apellido_huesped,DNI,nacionalidad,domicilio,ocupacion,fecha_nacimiento,email_huesped) value (\"$_POST[nombreHuesped]\",\"$_POST[apellidoHuesped]\",\"$_POST[dni]\",\"$_POST[nacionalidad]\",\"$_POST[domicilio]\",\"$_POST[ocupacion]\",\"$_POST[fechaNacimiento]\",\"$_POST[email]\")";
                        
			$query = $con->query($sql);
                        echo "sql ". $sql;
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");</script>";

			}
		}
	}
} else {
    print "<script>alert(\"nada que cargar.\");</script>";
}



?>
