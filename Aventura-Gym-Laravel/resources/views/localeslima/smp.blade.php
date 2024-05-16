<br>
<!-- Nuevo apartado del local San Martin de Porres -->
<hr class="lineal-local2">
<br>
<div class="container galeria local-santana">
    <h1 class="locales">Aventura Gym Local San Martin de Porres</h1>
    <div class="image-container">
        <div class="image"><img src="{{asset('images/entreno-sanmartinporres.webp')}}" alt="Local San Martin de Porres"></div>
        <div class="image"><img src="{{asset('images/salon-sanmartinporres.webp')}}" alt="Local San Martin de Porres"></div>
        <div class="image"><img src="{{asset('images/local-sanmartinporres.webp')}}" alt="Local San Martin de Porres"></div>
    </div>

    <div class="popup-image">
        <span class="close">&times;</span>
        <img src="{{asset('images/local-sanmartinporres.webp')}}" alt="Local San Martin de Porres">
    </div>
</div>
<br>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center"> <!-- Ajusta el tamaño de la columna según tus necesidades -->
            <a href="https://g.co/kgs/4ycqTGx" target="_blank" class="reserva-aqui">VER UBICACION</a>
        </div>
    </div>
</div>
<br>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Selecciona todas las imágenes dentro del contenedor con la clase 'image-container'
        document.querySelectorAll('.image-container img').forEach(image => {
            // Añade un evento de clic a cada imagen
            image.onclick = () => {
                // Selecciona el elemento de la imagen emergente con la clase 'popup-image'
                // y establece la propiedad de visualización en 'block', lo que hace que la imagen aparezca
                document.querySelector('.popup-image').style.display = 'block';
                document.querySelector('.popup-image img').src = image.getAttribute('src');
            }
        });

        // Selecciona el elemento con la clase 'close' dentro del elemento '.popup-image'
        document.querySelector('.popup-image .close').onclick = () => {
            // Selecciona el elemento de la imagen emergente con la clase 'popup-image'
            // y establece la propiedad de visualización en 'none', lo que hace que la imagen desaparezca
            document.querySelector('.popup-image').style.display = 'none';
        };

        // Cierra la imagen emergente al presionar la tecla 'Esc'
        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                document.querySelector('.popup-image').style.display = 'none';
            }
        });

        // Cierra la imagen emergente al hacer clic en el contorno negro transparente
        document.querySelector('.popup-image').addEventListener('click', (event) => {
            if (event.target === document.querySelector('.popup-image')) {
                document.querySelector('.popup-image').style.display = 'none';
            }
        });
    });
</script>
