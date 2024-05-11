var logoLink = document.querySelector('.navegaciones .enlace');
var logo = document.querySelector('.navegaciones .logo');
var headerSection = document.querySelector('.header_section');

logo.style.transition = 'transform 0.3s ease'; // Esto agrega transición suave en el logo de la imagen

logoLink.addEventListener('mouseover', function() {
    logo.style.transform = 'scale(1.2)'; // Esto aumenta el tamaño del logo al pasar el mouse sobre el enlace
});

logoLink.addEventListener('mouseout', function() {
    logo.style.transform = 'scale(1)'; // En esta parte regresa el logo a su tamaño original al quitar el mouse del enlace
});

$(document).ready(function(){
    $("#bi-moon").click(function(){
        // Cambiar el color de fondo del body y otros componentes
        $("body").toggleClass("dark-mode");
        $(".navegaciones").toggleClass("dark-mode");
        $(".hero").toggleClass("dark-mode");
        $(".footer-tipo").toggleClass("dark-mode");
        $('input').toggleClass("dark-mode");
        $('.info-nosotros').toggleClass("dark-mode");
        $('.reserva').toggleClass("dark-mode");
        $('.local-santana').toggleClass("dark-mode");
        $('ul').toggleClass("dark-mode");
        // Cambiar el ícono del botón entre luna y sol
        $(this).toggleClass("bi-moon bi-brightness-high");

        // Mostrar u ocultar el ícono de sol según el estado actual
        $("#bi-sun").toggle();

        // Cambiar el texto del botón entre "Modo Oscuro" y "Modo Claro"
        if ($(this).hasClass("bi-moon")) {
            $(this).attr("title", "Modo Oscuro");
        } else {
            $(this).attr("title", "Modo Claro");
        }
    });
});


 //   background: linear-gradient(2555deg, #1e1f1ffb, #000);