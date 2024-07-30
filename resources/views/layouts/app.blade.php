<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"> --}}
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/ocasion.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('js/home_login.js') }}"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
    <header id="app">
        <div class="logo">
            <img src=" {{ asset('img/IMG HOME/IMG HEADER - SUBMENU HEADER/LOGOS/NEGRO.png') }} "alt="">
        </div>
        <input type="checkbox" id="nav_check" hidden>
        <nav>
            <ul>
                <li>
                    <a href="home" class="">Inicio</a>
                </li>
                <li>
                    <a href="ocasion" class="">Diseñar Outfit</a>
                </li>
                <li>
                    <a href="estilo">Estilos</a>
                </li>
                <li>
                    <a href="tiendas_oficiales">Tiendas</a>
                </li>
                <li>
                    <a href="#" id="form-open2">Contactos</a>
                    <!-- <button class="button" id="form-open2">contactos</button> -->
                </li>
            </ul>
        </nav>
        <section class="homes">
            <div class="form_container">
                <i class="uil uil-times form_closed">X</i>
                <!-- imagen del inicio de secion  -->

                <div>
                    <img src="/img/qr.png" alt="" height="10">
                </div>
            </div>
        </section>


        <div class="s">

        </div>
        <div class="iniciarr2 ">

            {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button> --}}
            {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> --}}

            <ul class=" botone">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('iniciar sesion') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('registrarse') }}</a>
                        </li>
                    @endif
                @else
                    {{-- despliegue --}}
                    {{-- <div class="collapse navbar-collapse" id="navbarNavDropdown"> --}}

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a href="profile" class="dropdown-item">perfil</a>
                            <a href="" class="dropdown-item">otra parte</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                {{ __('cerrar sesion') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
            </div>
        @endguest
        </ul>
        {{-- </div> --}}
        </div <<label for="nav_check" class="hamburger">
        <div></div>
        <div></div>
        <div></div>
        </label>
    </header>
    <div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
        </div>
    </div>
    <br><br><br><br><br><br>
    <main class="py-4 cuadro">
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>
