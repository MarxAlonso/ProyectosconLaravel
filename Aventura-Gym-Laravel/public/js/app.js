
if($("#FormContacto").length>0){

	const inputs = document.querySelectorAll('#FormContacto .formulario__grupo-input');

	const expresiones = {
		nombres: /^[a-zA-Z]{1}[a-zA-Z\s]{3,36}$/, // Letras mayusculas, minusculas y espacios; no se puede iniciar con espacios
		telefono: /^[1-9]{1}\d{8}$/,// 9 digitos y no empiece por cero.
		correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,// Validación simple de correo
		comentario: /^[a-zA-Z0-9,áéíóúÁÉÍÓÚñÑ\s]{10,500}$/ // comentarios que solo contengan letras, numeros y espacios
	}

	const validarFormulario = (e) => {
		switch (e.target.name) {
			case "nombres":
				validarCampo(expresiones.nombres, e.target, 'nombres');
			break;
			case "correo":
				validarCampo(expresiones.correo, e.target, 'correo');
			break;
			case "telefono":
				validarCampo(expresiones.telefono, e.target, 'telefono');
			break;
			case "comentario":
				validarCampo(expresiones.comentario, e.target, 'comentario');
			break;
		}
	}

	inputs.forEach((input) => {
		input.addEventListener('keyup', validarFormulario);
		input.addEventListener('blur', validarFormulario);
	});


}

function formatoMayuscula(event) {
    let inputValue = event.target.value;
    let palabras = inputValue.split(' ');

    palabras = palabras.map(palabra => palabra.charAt(0).toUpperCase() + palabra.slice(1));

    let nuevoValor = palabras.join(' ');

    event.target.value = nuevoValor;
  }

    function upper(e) {
        e.value = e.value.charAt(0).toUpperCase() + e.value.slice(1);
    }