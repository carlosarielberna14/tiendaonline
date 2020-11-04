$(document).ready(function() {
    $("btnRegistro").click(function(e) {
        e.preventDefault();
        var user = $("#inputUser").val().trim();
        var pass = $("#inputPassword").val().trim();
        var nom = $("#inputnombre").val().trim();
        var mail = $("#inputcorreo").val().trim();
        console.log(user + " " + pass + " " + nom + " " + mail);
        insertarDato();


    }); //termina la llamada del login

    async function insertarDato() {
        const datos = new FormData(document.getElementById('formulario')); //trae todo  lo que tiene el formulario
        await fetch('registrarte.php', {
                method: 'POST',
                body: datos
            })
            //conversion a json 
            .then(response => response.json())
            .then(response => {
                //console.log(response.datos);
                if(response.datos=='ok'){
                    location.href="index.html";
                }else{
                    alert("Datos incorrectos");
                }
            })
            //en caso de error 
            .catch(err => {
                console.log(err);
            });

    } //end fetch


});