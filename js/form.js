function validacion() {
    nombre = document.getElementById("nombreHuesped").value;
    apellido = document.getElementById("apellidoHuesped").value;
    email = document.getElementById("email").value;
    nacionalidad = document.getElementById("nacionalidad").value;
    date = document.getElementById("fechaNacimiento").value;
    dni = document.getElementById("dni").value;
    indice = document.getElementById("nHabitacion").selectedIndex;
    if (nombre == null || nombre.length == 0 || /^\s+$/.test(nombre)) {
        alert("nombre esta en blanco");
        return false;
    } else {
        if (apellido == null || apellido.length == 0 || /^\s+$/.test(apellido)) {
            alert(" apellido esta en blanco");
            return false;
        } else {
            if (email == null || email.length == 0 || /^\s+$/.test(email)) {
                alert("email esta en blanco");
                return false;
            } else {
                if (nacionalidad == null || nacionalidad.length == 0 || /^\s+$/.test(nacionalidad)) {
                    alert("nacionalidad esta en blanco");
                    return false;
                } else {
                    if (date == null || date.length == 0 || /^\s+$/.test(date)) {
                        alert("date esta en blanco");
                        return false;
                    } else {
                        if (dni == null || dni.length == 0 || /^\s+$/.test(dni)) {
                            alert("DNI esta en blanco");
                            return false;
                        } else {
                            if (indice == null || indice == 0) {
                                alert("Seleccione una habitacion");
                                return false;
                            } else {
                                return true;
                            }
                        }
                    }
                }
            }
        }
    }
}


function validacion2() {
    nombre = document.getElementById("nombreHuesped").value;
    apellido = document.getElementById("apellidoHuesped").value;
    email = document.getElementById("email").value;
    nacionalidad = document.getElementById("nacionalidad").value;
    date = document.getElementById("fechaNacimiento").value;
    dni = document.getElementById("dni").value;
    indice = document.getElementById("nHabitacion").selectedIndex;
    if (nombre == null || nombre.length == 0 || /^\s+$/.test(nombre)) {

        return false;
    } else {
        if (apellido == null || apellido.length == 0 || /^\s+$/.test(apellido)) {

            return false;
        } else {
            if (email == null || email.length == 0 || /^\s+$/.test(email)) {

                return false;
            } else {
                if (nacionalidad == null || nacionalidad.length == 0 || /^\s+$/.test(nacionalidad)) {

                    return false;
                } else {
                    if (date == null || date.length == 0 || /^\s+$/.test(date)) {

                        return false;
                    } else {
                        if (dni == null || dni.length == 0 || /^\s+$/.test(dni)) {

                            return false;
                        } else {
                            if (indice == null || indice == 0) {

                                return false;
                            } else {
                                return true;
                            }
                        }
                    }
                }
            }
        }
    }
}