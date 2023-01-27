function validarFormulario() {
    var nombre =  document.getElementById('name').value;
    if (nombre == "") {
        document.getElementById('status').innerHTML = "Debe introducir 'Nombre'";
        return false;
    }
    var email =  document.getElementById('email').value;
    if (email == "") {
        document.getElementById('status').innerHTML = "Debe introducir 'E-mail'";
        return false;
    } else {
        var formato = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if(!formato.test(email)){
            document.getElementById('status').innerHTML = "'E-mail' incorrecto";
            return false;
        }
    }
    var asunto =  document.getElementById('subject').value;
    if (asunto == "") {
        document.getElementById('status').innerHTML = "Debe introducir 'Asunto'";
        return false;
    }
    var mensaje =  document.getElementById('message').value;
    if (mensaje == "") {
        document.getElementById('status').innerHTML = "Debe introducir 'Mensaje'";
        return false;
    }
    document.getElementById('status').innerHTML = "MENSAJE ENVIADO! Muy pronto recibirá respuesta. GRACIAS";
} 
