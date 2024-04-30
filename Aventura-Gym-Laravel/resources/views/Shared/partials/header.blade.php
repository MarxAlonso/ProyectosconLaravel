<div class="header_section sticky-top container-fluid p-0 m-0">
    <nav class="navegaciones">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="bi bi-list"></i>
        </label>
        <a href="/" class="enlace">
            <img src="{{ asset('images/aventura-gym.webp')}}" alt="Aventura Gym Logo" class="logo">
        </a>
        <ul>
            <li><a class="active menus-var" href="/"><b>INICIO</b></a>
            <li><a href="nosotros" class="menus-var"><b>NOSOTROS</b></a></li>
            <li><a href="servicios"><b>SERVICIOS</b></a></li>
            <li><a class="menus-var" href="https://aventuragym-mrx.blogspot.com/" target="_blank"><b>BLOG</b></a></li>
            <li><a href="locales" class="menus-var"><b>NUESTROS LOCALES</b></a></li>
            <li><a class="contact" href="contacto"><b>CONTÁCTANOS</b></a></li>
        </ul>
    </nav>
</div>

<script>
    var logoLink = document.querySelector('.navegaciones .enlace');
    var logo = document.querySelector('.navegaciones .logo');

    logo.style.transition = 'transform 0.3s ease'; // Esto agrega transición suave en el logo de la imagen

    logoLink.addEventListener('mouseover', function() {
        logo.style.transform = 'scale(1.2)'; // Esto aumenta el tamaño del logo al pasar el mouse sobre el enlace
    });

    logoLink.addEventListener('mouseout', function() {
        logo.style.transform = 'scale(1)'; // En esta parte regresa el logo a su tamaño original al quitar el mouse del enlace
    });
</script>