<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/estilos_estilos.css') }}">
    <link rel="shortcut icon" href="/img/logo I KAN negro.png" type="image/x-icon">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I KAN</title>
</head>

<body style="background: rgba(39, 214, 126, 0.267);">
    <header>
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
        <div class="user-icon">
            <img src="/IMG HEADER - SUBMENU HEADER/FOTO PERFIL.png" class="user-pic" onclick="toggleMenu()">
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
    <br>

    <br><br><br>
    <h1 style="background: rgb(255, 255, 255);">Registra una tienda oficial </h1>
    <br>

    <div style=" display:flex; padding-bottom:400px; justify-content:center;  ">
        <form action="{{ route('unit.store') }}" method="POST" enctype="multipart/form-data">
            <center>
                @csrf {{-- token o seguridad  --}}
                <label class="form-label">
                    <h2>Nombre de la tienda</h2>
                    <input class="form-control" type="text" style="width: 300px" name="nombre" class="form-control">
                </label>
                <br><br>
                <label class="form-label">
                    <h2>Descripcion de la tienda</h2>
                    <input class="form-control" style="width: 300px; height:200px" type="text" name="descrip">
                </label>
                <br><br>
                <label class="form-label">
                    <h2>ubicacion</h2>
                    <input class="form-control" style="width: 300px;" type="text" name="ubica">
                </label>
                <br><br>
                <div>
                    <label for="image">Imagen</label>
                    <br>
                    <input type="file" name="image" id="image">
                </div>

                <br><br>
                <button class="btn btn-primary" type="submit">Enviar Formulario:</button>
            </center>
        </form>
    </div>



    {{-- <div>
        <img src="" id="imagensSeleccionada" alt="">
    </div> --}}


    {{-- <script>
        $(document).ready(function(e){
            $('#img').change(function(){
                let reader = new FileReader();
                reader.onload =(e) =>{
                    $('#imagenSeleccionada').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);

            });

        });
    </script> --}}














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



</body>

</html>
