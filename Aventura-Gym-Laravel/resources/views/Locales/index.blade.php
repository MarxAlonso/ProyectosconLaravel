<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="input-group mb-3">
                <input type="text" id="input-busqueda" class="form-control" placeholder="Buscar..." aria-label="Buscar..." aria-describedby="button-addon2">
                <button class="btn btn-primary" type="button" id="boton-busqueda"><i class="bi bi-search"></i></button>
            </div>
        </div>
    </div>
</div>
<br>
<style>
    .info-div {
        border: 4px solid  #4968af;
        /* Borde del rectángulo */
        border-radius: 70px;
        /* Borde circular */
        padding: 1.2px;
        margin-bottom: 20px;
        overflow: hidden;
        /* Para contener el float */
        position: relative;
    }

    .info-div img {
        float: left;
        /* Alinea la imagen a la izquierda */
        margin-right: 40px;
        /* Margen a la derecha para separarla del texto */

        /* Hace que la imagen tenga forma circular */
        width: 280px;
        height: 230px;
        /* Tamaño máximo de la imagen */
        /* Altura automática para mantener la proporción */
        transition: transform 0.3s ease; 
    }

    .info-div:hover img {
        transform: scale(1.1); /* Agrandar la imagen al pasar el mouse */
    }

    

    /* Para que el texto se alinee a la derecha */
    .info-div .info-text {
        overflow: visible;
        /* Para contener el float */
    }

    /* Agrega un clearfix para limpiar los floats */
    .clearfix::after {
        content: "";
        display: table;
        clear: both;
    }

    @media screen and (max-width: 500px) {
        .info-div img {
            float: left;
            /* Alinea la imagen a la izquierda */
            margin-right: 20px;
            width: 461px;
            height: 271px;
            margin-bottom:20px;
        }

        .info-div{

            border-radius:32px;
        }

        .enlace-leer{

            margin-left:38%;
        }


    }






    @media screen and (max-width: 420px) {
        .info-div img {
            float: left;
            /* Alinea la imagen a la izquierda */
            margin-right: 20px;
            width: 380px;
            height: 250px;
        }


        .info-text ul {
            list-style-type: none;
            /* Elimina la viñeta predeterminada */
            padding-left: 20px;
            font-size: 14px;
            /* Añade un espacio a la izquierda para el texto */
        }

        .info-text ul li:before {
            content: "\2022";
            /* Utiliza un punto como viñeta */
            color: black;
            /* Color del punto */
            display: inline-block;
            /* Muestra el punto como un elemento de bloque */
            width: 1em;
            /* Ancho del punto */
            margin-left: -1em;
            /* Mueve el punto al margen izquierdo */
        }

        .info-text h3 {
        
            font-size: 25px;
            /* Para contener el float */
        }

        
        .enlace-leer a{
            margin-top: -15px;
        }
    }

    .info-text ul {
        list-style-type: none;
        /* Elimina la viñeta predeterminada */
        padding-left: 20px;
        /* Añade un espacio a la izquierda para el texto */
    }

    .info-text ul li:before {
        content: "\2022";
        /* Utiliza un punto como viñeta */
        color: black;
        /* Color del punto */
        display: inline-block;
        /* Muestra el punto como un elemento de bloque */
        width: 1em;
        /* Ancho del punto */
        margin-left: -1em;
        /* Mueve el punto al margen izquierdo */
    }

    .enlace-leer {
        text-decoration: none;
        color: white;
        background-color: #244289;
        padding: 0;
        padding-left: 5px;
        padding-right: 5px;
        border: 2px solid #244289;
        border-radius: 30px;
    }

    .enlace-leer:hover {
        text-decoration: none;
        color: black;
        background-color: white;
        border: 1px solid #244289;
        
    }
    h3{
        font-weight:680;

     }
</style>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="info-div clearfix">
                <img src="{{asset('images/localSantaAna.webp')}}" alt="Imagen 1">
                <div class="info-text">
                    <h3>Aventura Gym Local Santa Ana Pro</h3>
                    <ul>
                        <li>Atención ambulatoria y hospitalaria.</li>
                        <li>Te protegemos si eres trabajador independiente.</li>
                        <li>Contamos con cobertura frente a accidentes.</li>
                        <li>Ofrecemos cobertura internacional para emergencias médicas cuando estás fuera de tu país de origen.</li>
                    </ul>
                    <a class="enlace-leer" href="santana">Leer más</a>
                </div>
            </div>
            <div class="info-div clearfix">
                <img src="{{asset('images/localNaranjal.webp')}}" alt="Imagen 2">
                <div class="info-text">
                    <h3>Aventura Gym Local Naranjal</h3>
                    <ul>
                        <li>Protección para la carga.</li>
                        <li>Cubrimos todos los envíos dentro de un período determinado, o específicas, cubriendo un solo envío.</li>
                        <li>Cubrimos contra el robo con fractura del medio conductor.</li>
                        <li>Cubrimos pérdidas o daños a la mercancía durante el tránsito.</li>
                    </ul>
                    <a class="enlace-leer" href="Transporte">Leer más</a>
                </div>
            </div>
            <div class="info-div clearfix">
                <img src="{{asset('images/local-Universitaria2751.webp')}}" alt="Imagen 2">
                <div class="info-text">
                    <h3>Aventura Gym Local Universitaria 2751</h3>
                    <ul>
                        <li>Cobertura integral contra daños por incendio.</li>
                        <li>Pólizas flexibles adaptadas a tus propiedades y necesidades específicas.</li>
                        <li>Asesoramiento personalizado de nuestro equipo de expertos en seguros contra incendios.</li>
                        <li>Proceso de reclamaciones rápido y eficiente.</li>
                    </ul>
                    <a class="enlace-leer" href="Incendio">Leer más</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Botón Ver más -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <button id="ver-mas-btn" class="btn btn-primary mt-4">Ver más</button>
        </div>
    </div>
</div>

<br>
<!-- Contenedor de los elementos que se mostrarán después de hacer clic en "Ver más" -->
<div id="contenido-adicional" style="display: none;">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="info-div clearfix">
                    <img src="{{asset('images/local-sanmartinporres.webp')}}" alt="Imagen 1">
                    <div class="info-text">
                        <h3>Aventura Gym Local San Martin de Porres</h3>
                        <ul>
                            <li>Cobertura integral para responsabilidad civil general y profesional.</li>
                            <li>Pólizas flexibles adaptadas a las características de tus actividades y riesgos específicos.</li>
                            <li>Asesoramiento personalizado de nuestro equipo de expertos en seguros de Responsabilidad Civil.</li>
                            <li>Proceso de reclamaciones rápido y eficiente.</li>
                        </ul>
                        <a class="enlace-leer" href="Responsabilidad-Civil">Leer más</a>
                    </div>
                </div>
                <div class="info-div clearfix">
                    <img src="{{asset('images/local-santaanita.webp')}}" alt="Imagen 2">
                    <div class="info-text">
                        <h3>Aventura Gym Local Santa Anita</h3>
                        <ul>
                            <li>Cobertura completa para embarcaciones de todo tipo.</li>
                            <li>Pólizas flexibles adaptadas a tus necesidades específicas.</li>
                            <li>Asesoramiento personalizado de nuestro equipo de expertos en seguros marítimos.</li>
                            <li>Proceso de reclamaciones rápido y eficiente.</li>
                        </ul>
                        <a class="enlace-leer" href="Cascos-Maritimos">Leer más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contenedor del texto -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center mt-4">
            <p class="texto-centrado">¡Tu bienestar y mejorar tu salud es nuestra prioridad número uno!</p>
        </div>
    </div>
</div>

<!-- Estilos CSS para el texto centrado -->
<style>
    .texto-centrado {
        margin-top: 70px;
        font-size: 25px;
        color: #30519E;
        margin-bottom: 140px;
    }

    @media screen and (max-width: 768px) {
        .texto-centrado {
            font-size: 16px;
        }
    }
</style>


<!-- Script para mostrar más contenido al hacer clic en el botón -->
<script>
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
</script>

<!-- Script para hacer la funcion de busqueda del input de busqueda -->
<script>
    
    function buscarSeguro() {
        var textoBusqueda = document.getElementById('input-busqueda').value.toLowerCase();

        var seguros = document.getElementsByClassName('info-div');

        for (var i = 0; i < seguros.length; i++) {
            var seguro = seguros[i];
            var nombreSeguro = seguro.getElementsByClassName('info-text')[0].getElementsByTagName('h3')[0].innerText.toLowerCase();

            if (nombreSeguro.includes(textoBusqueda)) {
                seguro.style.display = 'block';
            } else {
                seguro.style.display = 'none';
            }
        }
    }

    var inputBusqueda = document.getElementById('input-busqueda');

    inputBusqueda.addEventListener('input', buscarSeguro);
</script>