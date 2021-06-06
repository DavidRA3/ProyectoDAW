$(document).ready(function(){
    
    //Focus
    $('#name').focus(); //Focus en el primer del registro

    //Validar y guardar formulario de registro
    $(document).on('click', '#registrar', function() {   

        console.log('registrar');

        var formuOK = true; 

        var args={};

            args.name = $('#name').val();
            args.surname = $('#surname').val();
            args.email = $('#email').val();
            args.username = $('#username').val();
            args.password = $('#password').val();
            args.rpassword = $('#rpassword').val();

        var pass1 = document.getElementById("password").value;
        var pass2 = document.getElementById("rpassword").value;       


    //validación de campos del formulario de registro

        if (!/^([A-Z]{1}[a-zñáéíóú]+[\s]*)+$/.test(args.name)) {
            formuOK = false;
            $("#name").attr("placeholder", "Error: Introduce tus nombre");
        }

        if (!/^([A-Z]{1}[a-zñáéíóú]+[\s]*)+$/.test(args.surname)) {
            formuOK = false;
            $("#surname").attr("placeholder", "Error: Introduce tus apellidos");
        }

        if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(args.email)) {
            formuOK = false;
            $("#email").attr("placeholder", "Error: Introduce tu email");
        }

        if (!/^[a-z0-9_-]{3,10}$/.test(args.username)) {
            formuOK = false;
            $("#username").attr("placeholder", "Error: Introduce tu usuario");
        }

        if (!/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/.test(args.password) && pass1 != pass2) {
            formuOK = false;
            $("#password").attr("placeholder", "Error: Introduce tu contraseñas");
        }

        if (pass1 != pass2) {
            formuOK = false;
            $("#rpassword").attr("placeholder", "Error: Las contraseñas no coinciden");
        }

    }); //Fin registrar
    
}); //Fin ready