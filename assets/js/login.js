$(document).ready(function() {
    $("#btnLogin").click(function(e) {
        e.preventDefault();
        var user = $("#inputUser").val().trim();
        var pass = $("#inputPassword").val().trim();
        console.log(user + " " + pass);
        mostrarDato();


    }); //termina la llamada del login

    async function mostrarDato() {
        const datos = new FormData(document.getElementById('formulario')); //trae todo  lo que tiene el formulario
        await fetch('assets/data/login.php', {
                method: 'POST',
                body: datos
            })
            //conversion a json 
            .then(response => response.json())
            .then(response => {
                //console.log(response.datos);
                if(response.datos=='ok'){
                    location.href="principal.html";
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

