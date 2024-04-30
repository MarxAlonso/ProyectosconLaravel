<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aventura Gym</title>
    <!-- Logo de la empresa -->
    <link rel="shortcut icon" href="views/images/aventura-gym.webp">
    <!-- Estilos css y bootstrap -->
    <link rel="stylesheet" href="views/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/bootstrap.css">
    <link rel="stylesheet" href="views/css/style.css">
    <link rel="stylesheet" href="views/css/inicio.css">
    <link rel="stylesheet" href="views/css/locales.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="background: linear-gradient(255deg, #2e2d2dfb, #000);">
    @include('Shared.partials.header')

    <div class="container-fluid" style="flex: 1;padding-right:0;padding-left:0px">
        <main role="main">
            {!! $renderBody !!}
        </main>
    </div>

    @include('Shared.partials.footer')
<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
<script src="views/js/jquery-3.5.1.min.js"></script>
<script src="views/js/bootstrap.bundle.js"></script>
<script src="views/js/bootstrap.min.js"></script>
<script src="views/js/seleccionar-imagen.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.0.943/pdf.min.js"></script>
<script href="views/js/bootstrap.js"></script>
<script src="https://unpkg.com/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-12PnpHPfZlDDU+1+AwhEaHzI7v+B3Nu7x6v2WP5a2rw5wr2jtU3RPJ+E7zpcB1B8" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-LFw3A8DizQ7y9yUZeGyDF9+uGpGnQ4Jxk3fxzq8tJ3J3gcGzGFiqLQ9LG6FtfdE7" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/c1eae85dfa.js" crossorigin="anonymous"></script>
<script>
    new WOW().init();
</script>
</body>

</html>

    