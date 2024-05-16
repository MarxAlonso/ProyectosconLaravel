<!-- Nuevo apartado del local Naranjal -->
<hr class="lineal-local2">
<br>
<div class="container galeria local-santana">
    <h1 class="locales">Aventura Gym Local Naranjal</h1>
    <div class="image-container">
        <div class="image"><img src="{{asset('images/salonentreno-naranjal.webp')}}" alt="Local Naranjal"></div>
        <div class="image"><img src="{{asset('images/salonejercicio-naranjal.webp')}}" alt="Local Naranjal"></div>
        <div class="image"><img src="{{asset('images/localNaranjal.webp')}}" alt="Local Naranjal"></div>
    </div>

    <div class="popup-image">
        <span class="close">&times;</span>
        <img src="{{asset('images/salonentreno-naranjal.webp')}}" alt="Local Naranjal">
    </div>
</div>
<br>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center"> <!-- Ajusta el tamaño de la columna según tus necesidades -->
            <a href="https://g.co/kgs/4ydRNk4" target="_blank" class="reserva-aqui">VER UBICACION</a>
        </div>
    </div>
</div>
<br>
<script>
    // Selecciona todas las imágenes dentro del contenedor con la clase 'image-container'
document.querySelectorAll('.image-container img').forEach(image => {
    // Añade un evento de clic a cada imagen
    image.onclick = () => {
        // Selecciona el elemento de la imagen emergente con la clase 'popup-image'
        // y establece la propiedad de visualización en 'block', lo que hace que la imagen aparezca
        document.querySelector('.popup-image').style.display='block';
        document.querySelector('.popup-image img').src = image.getAttribute('src');
    }
});

// Selecciona el elemento con la clase 'close' dentro del elemento '.popup-image'
document.querySelector('.popup-image.close').onclick = () => {
    // Selecciona el elemento de la imagen emergente con la clase 'popup-image'
    // y establece la propiedad de visualización en 'none', lo que hace que la imagen desaparezca
    document.querySelector('.popup-image').style.display='none';
};
</script>