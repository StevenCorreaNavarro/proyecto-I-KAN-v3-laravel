<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/tiendas.css') }}"><!-- llamado de la seccion de estilos -->
    <link rel="shortcut icon" href="/img/logo I KAN blanco.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I KAN</title>
</head>

<body>

    <header>

        <div class="logo">
            <img src=" {{ asset('img/IMG HOME/IMG HEADER - SUBMENU HEADER/LOGOS/NEGRO.png') }} "alt="">
        </div>
        <input type="checkbox" id="nav_check" hidden>
        <nav>
            <ul>
                <li>
                    <a href="{{ route('home.home') }}" class="">Inicio</a>
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
                    <img src="/img/qr.png" alt="">
                </div>


            </div>

        </section>
        <div class="iniciarr">
            @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end">
                    @auth
                        <a href="hom">

                            <button>{{ Auth::user()->name }}!</button>
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            <button>Log in</button>
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                <button>Register</button>
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>




        <div class="user-icon">

            {{-- <img src="/IMG HEADER - SUBMENU HEADER/FOTO PERFIL.png" class="user-pic" onclick="toggleMenu()"> --}}
            <div class="submenus" id="submenu">
                <div class="submenu">
                    <div class="info">
                        <img src="/IMG HEADER - SUBMENU HEADER/FOTO PERFIL.png" alt="">
                        <h2>Jack Steven Correa</h2>

                    </div>
                    <hr>
                    <a href="" class="submenu-links">
                        <img src="/IMG HEADER - SUBMENU HEADER/usuario.png">
                        <p>Mi cuenta</p>
                        <span>></span>
                    </a>
                    <a href="" class="submenu-links">
                        <img src="/IMG HEADER - SUBMENU HEADER/hogar.png">
                        <p>Inicio</p>
                        <span>></span>
                    </a>
                    <a href="" class="submenu-links">
                        <img src="/IMG HEADER - SUBMENU HEADER/favorito (3).png">
                        <p>Favoritos</p>
                        <span>></span>
                    </a>
                    <a href="" class="submenu-links">
                        <img src="/IMG HEADER - SUBMENU HEADER/tienda.png">
                        <p>Tiendas Oficiales</p>
                        <span>></span>
                    </a>
                    <a href="" class="submenu-links">
                        <img src="/IMG HEADER - SUBMENU HEADER/boton-web-de-ayuda.png">
                        <p>Ayuda/PQR</p>
                        <span>></span>
                    </a>
                    <a href="" class="submenu-links">
                        <img src="/IMG HEADER - SUBMENU HEADER/cerrar-sesion.png">
                        <p>Salir</p>
                        <span>></span>
                    </a>
                </div>
            </div>

        </div>

        <label for="nav_check" class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </label>
    </header>

    <script>
        let submenu = document.getElementById("submenu");

        function toggleMenu() {
            submenu.classList.toggle("open-menu");
        }
    </script>






    <br><br><br>



    <div>
        <table class="table">
            @foreach ($units as $unit)
                <div class="cuer">
                    <div class="cuero">
                        <div class="tx" style="background-color: rgba(255, 255, 255, 0.496)">
                            <center>
                                <div>
                                    {{-- en esta parte es para visualizar la imagen subida --}}
                                    @if ($unit->image)
                                        <img src="{{ asset('images/' . $unit->image) }}" alt="" width="150">
                                    @endif
                                    <h1>{{ $unit->nombre }}</h1>
                                    <br>
                            </center>
                        </div>
                        <div class="intex">
                            <div>
                                <p>
                                    {{ $unit->descrip }}
                                </p>
                            </div>
                            <br>
                            <a href="/ubicacion">seleccionar</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </table>

        {{-- home.home nombre de la ruta --}}
        <br>
        <br>
        {{-- <table class="table">
            @foreach ($units as $unit)
                <tr>
                    <td>{{ $unit->nombre }}</td>
                    <td>{{ $unit->descrip }} </td>
                    <td><a href="{{ route('unit.show', $unit->id) }}">Mostrar</a></td>
                    <td><a href="{{ route('unit.edit', $unit->id) }}">Editar</a></td>
                    <td>
                        <form action="{{ route('unit.destroy', $unit->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-primary">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table> --}}


























        <footer>
            <div class="container-ft">
                <div class="footer-content">
                    <div class="footer-div">
                        <div class="social-media">
                            <div class="logft">
                                <img src="/img/logo I KAN blanco.png" alt="">
                            </div>
                            <ul class="social-icons">
                                <li>
                                    <h1>Siguenos</h1>
                                </li>
                                <li>
                                    <a href="https://web.facebook.com/?locale=es_LA&_rdc=1&_rdr" target="_blank"><i
                                            class="fab fa-facebook-square"> facebook</i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://co.pinterest.com/"><i class="fab fa-pinterest"> Pinterest</i></a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"> Youtube</i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"> Instagram</i></a>
                                </li>
                            </ul>
                            <div class="social-icons">
                                <li>
                                    <h1>Somos I KAN</h1>
                                </li>
                                <ul>
                                    <li>Quienes Somos</li>
                                </ul>
                                <ul>
                                    <li>Preguntas frecuentes</li>
                                </ul>
                                <ul>
                                    <li>Comunicate con nosoos</li>
                                </ul>
                            </div>
                            <div class="social-icons">
                                <li>
                                    <h1>Politicas</h1>
                                </li>
                                <ul>
                                    <li>Politica de tratamiento de datos</li>
                                </ul>
                                <ul>
                                    <li>Terminos y condiciones</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <div class="ulti">
            <li>Todos los derechos reservados 2024. I kan Colombia</li>
        </div>


        <script src="/1.Home_login.js"></script>
</body>

</html>
