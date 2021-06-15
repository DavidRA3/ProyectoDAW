$(document).ready(function(){
    
    $('#name').focus(); //Focus en el primer del registro
    validation(); //validaciones del formulario
    
}); //Fin ready


/* --- FUNCTIONS --- */

function validation(){

    var formuOK = true; //bandera para la validación
    
    var args={}; //objeto para almacenar los valores del formulario


    //Validar y guardar formulario de registro
    $(document).on('click', '#registrar', function(e) {   
        
        console.log('registrar');
        formuOK = true; 

        args.name = $('#name').val();
        args.surname = $('#surname').val();
        args.email = $('#email').val();
        args.username = $('#username').val();
        args.password = $('#password').val();
        args.rpassword = $('#rpassword').val();
      

        //------------- validación de campos del formulario de registro  ------------------

        if (!/^([A-Z]{1}[a-zñáéíóú]+[\s]*)+$/.test(args.name)) {
            formuOK = false;
            //$("#name").attr("placeholder", "Error: Introduce tus nombre");
            $("label[for='name']").html('<span style="color: red">* Introduce tu nombre (la primera en mayúsculas):</span>');
        
        }else $("label[for='name']").html('Nombre:');


        if (!/^([A-Z]{1}[a-zñáéíóú]+[\s]*)+$/.test(args.surname)) {
            formuOK = false;
            //$("#surname").attr("placeholder", "Error: Introduce tus apellidos");
            $("label[for='surname']").html('<span style="color: red">* Introduce tus Apellidos (la primera en mayúsculas):</span>');
        
        }else $("label[for='surname']").html('Apellidos:');
        

        if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(args.email)) {
            formuOK = false;
            //$("#email").attr("placeholder", "Error: Introduce tu email");
            $("label[for='email']").html('<span style="color: red">* Formato incorrecto (direccion@correo.com):</span>');
        
        }else $("label[for='email']").html('Email:');
        
   
        if (!/^[a-z0-9_-]{3,10}$/.test(args.username)) {
            formuOK = false;
            //$("#username").attr("placeholder", "Error: Introduce tu usuario");
            $("label[for='username']").html('<span style="color: red">* De 3 a 10 caracteres en minúsculas:</span>');
        
        }else $("label[for='username']").html('Usuario:');


        if (!/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/.test(args.password)) {
            formuOK = false;
            //$("#password").attr("placeholder", "Error: Introduce tu contraseñas");
            $("label[for='password']").html('<span style="color: red">* Contraseña demasiado débil:</span>');
        
        }else $("label[for='password']").html('Contraseña:');


        if (args.password != args.rpassword) {
            formuOK = false;
            //$("#rpassword").attr("placeholder", "Error: Las contraseñas no coinciden");
            $("label[for='rpassword']").html('<span style="color: red">* Las contraseñas no coinciden :</span>');
        
        }else $("label[for='rpassword']").html('Repita contraseña:');

        //-------- fin validaciones -------


        //en el caso de que no pase las validaciones detenemos el evento submit de este evento click para que no envíe datos
        if (!formuOK) { 
            console.log('detenemos evento');
            //console.log(e);
            e.preventDefault();
            $("html, body").scrollTop(100);
        }

    }); //end click event
    
}//end validation