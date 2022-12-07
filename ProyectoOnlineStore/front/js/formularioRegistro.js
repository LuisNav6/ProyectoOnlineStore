const formulario = document.getElementById('formulario'); // Accedemos al formulario
const inputs = document.querySelectorAll('#formulario input'); // Accedemos a todos los inputs del formulario, obtenemos un arreglo de todos los inputs

// Expresiones regulares
const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}

// Objeto campo
const campos = {
    usuario: false,
    nombre: false,
    password: false,
    correo: false,
    telefono: false
}


// Funcion que comprueba los campos
const validarFormulario = (e) => {
    switch(e.target.name){ // Recupera la tag "name"
        case "usuario" :
            validarCampo(expresiones.usuario, e.target, 'usuario');
        break;
        case "nombre" :
            validarCampo(expresiones.nombre, e.target, 'nombre');
        break;
        case "password" :
            validarCampo(expresiones.password, e.target, 'password');
            validarPassword();
        break;
        case "password2" :
            validarPassword();
        break;
        case "correo" :
            validarCampo(expresiones.correo, e.target, 'correo');
        break;
        case "telefono" :
            validarCampo(expresiones.telefono, e.target, 'telefono');
        break;
    }
}

// Validar contraseñas
const validarPassword = () => {
    const inputPassword1 = document.getElementById('password');
    const inputPassword2 = document.getElementById('password2');

    if(inputPassword1.value !== inputPassword2.value){
        document.getElementById(`grupo__password2`).classList.add('formulario__grupo-incorrecto'); // Recuperamos la clase y colocamos el estilo de incorrecto
        document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo__password2 i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo__password2 i`).classList.add('fa-circle-xmark');
        document.querySelector(`#grupo__password2 .formulario__input-error`).classList.add('formulario__input-error-activo'); // Agregarle el estilo
        campos['password'] = false;
    }else{
        document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-incorrecto'); // Recuperamos la clase y removemos el estilo de incorrecto
        document.getElementById(`grupo__password2`).classList.add('formulario__grupo-correcto'); // Recuperamos la clase y colocamos el estilo de correcto
        document.querySelector(`#grupo__password2 i`).classList.add('fa-check-circle'); // Colocamos el incono new de check
        document.querySelector(`#grupo__password2 i`).classList.remove('fa-circle-xmark'); // Eliminamos el icono anterior
        document.querySelector(`#grupo__password2 .formulario__input-error`).classList.remove('formulario__input-error-activo'); // Quitarle el estilo
        campos['password'] = true;
    }
}

// Funcion para validar todos los campos
const validarCampo = (expresion, input, campo) => {
    // Se cambian las comillas '' por `` para que agarre el valor real de campo
    if(expresion.test(input.value)){ // Comprobamos con las expresiones y le colocamos como parametro la etiqueta "value" (devuelve un true o un false)
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto'); // Recuperamos la clase y removemos el estilo de incorrecto
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto'); // Recuperamos la clase y colocamos el estilo de correcto
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle'); // Colocamos el incono new de check
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-circle-xmark'); // Eliminamos el icono anterior
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo'); // Quitarle el estilo
        campos[campo] = true; // Si entra a validarCampo significa que esta lleno el input
    }else{
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto'); // Recuperamos la clase y colocamos el estilo de incorrecto
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-circle-xmark');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo'); // Agregarle el estilo
        campos[campo] = false;
    }
}

// Ejecute un codigo por cada input
inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario)
    input.addEventListener('blur', validarFormulario) // Para cuando da click afuera del input
});

// Boton de enviar
formulario.addEventListener('submit', (e) => {
    // Aqui va a donde se mandan los datos 
    e.preventDefault();

    // Comprobaciones de que todos los campos esten correctos
    if(campos.usuario && campos.nombre && campos.password && campos.correo && campos.telefono){

        // Encapsulamos todos los datos del formulario
        let datos = new FormData(formulario);

        // Objeto de metodo por el cual se va enviar la info
        peticion = {
            method: 'POST',
            body:datos
        }

        // Mandamos los datos al archivo php
        fetch('php/register.php',peticion)
        fetch('php/')
        
        formulario.reset();
        document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activado');
        setTimeout(() =>{
            document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activado');
        }, 3000);
        document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => { // Por cada icono se ejecutara una funcion que es el que remueve el icono
            icono.classList.remove('formulario__grupo-correcto');
        });
    }else{
        document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activado');
        setTimeout(() =>{
            document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activado');
        }, 3000);   
    }
});

