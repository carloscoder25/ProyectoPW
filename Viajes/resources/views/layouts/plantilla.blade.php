<!DOCTYPE html>
<html lang="en" style="height: 100%">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&display=swap"   rel="stylesheet">
    <style>
        .navbar-hidden{
            transform: translateY(-100%);
            transition: transform 0.3s ease-in-out;
        }
    </style>
     <script>
        // JavaScript para ocultar la barra de navegación al hacer scroll hacia abajo
        let lastScrollTop = 0;
        window.addEventListener("scroll", function() {
            const navbar = document.querySelector("nav");
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollTop > lastScrollTop) {
                navbar.classList.add("navbar-hidden");
            } else {
                navbar.classList.remove("navbar-hidden");
            }
            lastScrollTop = scrollTop;
        });
    </script>
    <title>Plantilla</title>
</head>
<body style="height: 100%">
    <nav class="navbar navbar-expand-lg navbar-dark bg-orange text-center" style="background-color:rgb(0, 115, 255)">
        <div class="container-fluid">
          <a class="navbar-brand text-dark" href="/">{{__('TRAVELL')}}</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#proposito">{{__('Vuelos')}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#equipo">{{__('Reservaciones')}}</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>

      @yield('contenido')

      <footer class="bg-dark text-orange pt-4" style="color: rgb(43, 0, 255);">
        <div class="container">
        
            <div class="text-center">
                <h5 class="text-uppercase" style="color: white">{{__('Agencia de viajes Travell') }}</h5>
                <p>{{__('Descubre tu siguiewnte destino con Travell') }}.</p>
                <p>&copy; {{__('Travell') }}, {{ date('Y') }}</p>{{-- Logica sacada de chat, entendida que llamamos una funcion de php para sacar el dia, mes y año --}}
            </div>
        </div>
    </footer>
</body>
</html>