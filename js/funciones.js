function validar(){

    /*creo una variable de tipo booleano que en principio tendrá un valor true(verdadero),
    y que se convertirá en false(falso) cuando la condición no se cumpla*/
    var todo_correcto = true;
    var mensaje=" ";
    var nombre = document.getElementById('nombre');
    var apellidos = document.getElementById('apellidos');

    nombre.oninvalid = function(event) {
        event.target.setCustomValidity('El nombre del alumno no debe contener numeros');
    }
    apellidos.oninvalid = function(event) {
        event.target.setCustomValidity('Los apellidos del alumno no debe contener numeros');
    }
    
    /*En este caso le pediremos al usuario que introduzca un maximo caracteres.*/
    if(document.getElementById('idusuario').value.length > 10 ){
        todo_correcto = false;
        mensaje+="El identificador de usuario es mayor de 10 caracteres, \n";
    }
    if(document.getElementById('usuario').value.length > 25 ){
        todo_correcto = false;
        mensaje+="El usuario es mayor de 25 caracteres, \n";
    }
    if(document.getElementById('contrasenya').value.length > 70 ){
        todo_correcto = false;
        mensaje+="La contraseña es mayor de 70 caracteres, \n";
    }
    if(document.getElementById('nombre').value.length > 25 ){
        todo_correcto = false;
        mensaje+="El nombre del alumno es mayor de 25 caracteres, \n";
    }
    if(document.getElementById('apellidos').value.length > 50 ){
        todo_correcto = false;
        mensaje+="El apellidos del alumno es mayor de 50 caracteres, \n";
    }
    if(document.getElementById('email').value.length > 250 ){
        todo_correcto = false;
        mensaje+="El email del alumno es mayor de 250 caracteres, \n";
    }

    /*Si los campos estan vacíos, todo_correcto será false.*/
    if(document.getElementById('idusuario').value == ''){
        todo_correcto = false;
        mensaje+="El identificador del usuario no puede estar vacio \n";
    }
    if(document.getElementById('usuario').value == ''){
        todo_correcto = false;
        mensaje+="El usuario no puede estar vacio \n";
    }
    if(document.getElementById('contrasenya').value == ''){
        todo_correcto = false;
        mensaje+="La contraseña no puede estar vacio \n";
    }
    if(document.getElementById('nombre').value == ''){
        todo_correcto = false;
        mensaje+="El nombre del alumno no puede estar vacio \n";
    }
    if(document.getElementById('apellidos').value == ''){
        todo_correcto = false;
        mensaje+="Los apellidos del alumno no puede estar vacio \n";
    }
    if(document.getElementById('email').value == ''){
        todo_correcto = false;
        mensaje+="El correo electronico del alumno no puede estar vacio \n";
    }
    if(document.getElementById('perfil').value == 'null'){
        todo_correcto = false;
        mensaje+="El perfil del usuario no puede estar vacio \n";
    }
    if(document.getElementById('fecha').value == ''){
        todo_correcto = false;
        mensaje+="La fecha de nacimiento del alumno no puede estar vacio \n";
    }
    if(document.getElementById('curso').value == 'null'){
        todo_correcto = false;
        mensaje+="El curso del alumno no puede estar vacio \n";
    }

    /*Validaremos también el checkbox del formulario.Entonces
    hacemos el if y decimos que si nuestro checkbox NO está
    checked, estará mal.*/
    if(!document.getElementById('condiciones').checked){
        todo_correcto = false;
    }

    /*Por último, y como aviso para el usuario, si no está todo bién, osea, si la variable
    todo_correcto ha devuelto false al menos una vez, generaremos una alerta advirtiendo
    al usuario de que algunos datos ingresados no son los que esperamos.*/
    if(!todo_correcto){
        alert(mensaje);
    }

    return todo_correcto;
}
