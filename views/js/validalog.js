$(document).ready(function(){

    //Focus
    $('#username').focus(); //Focus en el primer del login

    //Validar y guardar formulario de login
    $(document).on('click', '#submit', function() {   

        console.log('submit');

        var formuOK = true; 

        var args={};

            args.username = $('#username').val();
            args.password = $('#password').val();


    //validación de campos del formulario de login

        if (!/^[a-z0-9_-]{3,10}$/.test(args.username)) {
            formuOK = false;
            $("#username").attr("placeholder", "Error: Introduce un usuario");
        }

        if (!/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/.test(args.password)) {
            formuOK = false;
            $("#password").attr("placeholder", "Error: Introduce la contraseña");
        }

    }); //Fin submit
    
}); //Fin ready