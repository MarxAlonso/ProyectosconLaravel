//Script para mostrar más contenido al hacer clic en el botón
// Obtener el botón "Ver más" y el contenido adicional
var verMasBtn = document.getElementById('ver-mas-btn');
var contenidoAdicional = document.getElementById('contenido-adicional');

// Función para mostrar más contenido
function mostrarMasContenido() {
    contenidoAdicional.style.display = 'block'; // Mostrar el contenido adicional
    verMasBtn.style.display = 'none'; // Ocultar el botón "Ver más"
}
// Agregar un event listener para el clic en el botón
verMasBtn.addEventListener('click', mostrarMasContenido);


//Script para hacer la funcion de busqueda del input de busqueda
function buscarSeguro() {
    var textoBusqueda = document.getElementById('input-busqueda').value.toLowerCase();

    var seguros = document.getElementsByClassName('info-div');

    for (var i = 0; i < seguros.length; i++) {
        var seguro = seguros[i];
        var nombreLocal = seguro.getElementsByClassName('info-text')[0].getElementsByTagName('h3')[0].innerText.toLowerCase();

        if (nombreLocal.includes(textoBusqueda)) {
            seguro.style.display = 'block';
        } else {
            seguro.style.display = 'none';
        }
    }
}

var inputBusqueda = document.getElementById('input-busqueda');

inputBusqueda.addEventListener('input', buscarSeguro);