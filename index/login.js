

function loguear() {
    let user = document.getElementById("usuarios").value;
    let pass = document.getElementById("contrasena").value;



    if (user == "derek" && pass == "141412") {
        window.location = "index.html";
    }

    else {
        alert("Datos incorretos");
    }


}

