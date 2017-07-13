$(document).ready(function(){
    $("#RegistroHuesped").click(function(){
        $("#centro").load("php/formularioHuesped.php");
    });

    $("#checkin").click(function(){
        $("#centro").load("php/habitacionRegistro.php");
    });

    $("#checkout").click(function(){
        $("#centro").load("php/formularioHuesped.php");
    });
});
