function validacion() {
    nombre = document.getElementById("nombreHuesped").value;
    apellido = document.getElementById("apellidoHuesped").value;
    email = document.getElementById("email").value;
    nacionalidad = document.getElementById("nacionalidad").value;
    date = document.getElementById("fechaNacimiento").value;
    dni = document.getElementById("dni").value;
  
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

                            return true;

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

                            return true;

                        }
                    }
                }
            }
        }
    }
}
function validacion3() {
    id_huesped = document.getElementById("id_Huesped").value;
    //apellido_huesped = document.getElementById("apellido_huesped").value;
    checkin = document.getElementById("checkin").value;
    checkout = document.getElementById("checkout").value;
    costo_total = document.getElementById("costo_total").value;

    if (id_huesped == null || id_huesped.length == 0 || /^\s+$/.test(id_huesped)) {
        alert("id huesped esta en blanco");
        return false;
    } //else {
      //  if (apellido_huesped == null || apellido_huesped.length == 0 || /^\s+$/.test(apellido_huesped)) {
        //    alert(" apellido esta en blanco");
          //  return false;
      //  }
        else {
            if (checkin == null || checkin.length == 0 || /^\s+$/.test(checkin)) {
                alert("fecha ingreso esta en blanco");
                return false;
            } else {
                if (checkout == null || checkout.length == 0 || /^\s+$/.test(checkout)) {
                    alert("fecha salida esta en blanco");
                    return false;
                } else {
                    if (costo_total == null || costo_total.length == 0 || /^\s+$/.test(costo_total)) {
                        alert("costo esta en blanco");
                        return false;

                    } else {

                        return true;

                    }
                }
            }
        }
    }

