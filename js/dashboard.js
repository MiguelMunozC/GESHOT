$(document).ready(function(){

    //Carga la vista formularioHuesped al hacer click en #RegistroHuesped
    $("#RegistroHuesped").click(function(){
        $("#centro").load("php/formularioHuesped.php");
    });

    //Carga la vista habitacionRegistro al hacer click en #checkin
    $("#checkin").click(function(){
        $("#centro").load("php/habitacionRegistro.php");
    });

    //Carga la vista ??? al hacer click en #???
    $("#checkout").click(function(){
        $("#centro").load("php/formularioHuesped.php");
    });

    //Carga la vista crud al hacer click en #Registros
    $("#Registros").click(function(){
        $("#centro").load("php/crud.php");
    });

    //Carga la vista asignarHabitacion al hacer click en #AsignacionHabitacion
    $("#AsignacionHabitacion").click(function(){
        $("#centro").load("php/asignarHabitacion.php");
    });

});
