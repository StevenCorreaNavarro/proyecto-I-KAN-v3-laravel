<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Home.css') }}"><!-- llamado de la seccion de estilos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <!--llamado de libreria de iconos de redes sociales-->
    <link rel="shortcut icon" href="/img/LOGOS BLANCO Y NEGRO/BLANCO.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Inicio - I kan </title>
</head>

<body>
    @extends('layouts.app')


    <div class="imagencentrado">
        
        <!-- <img src="/img/logo I KAN blanco.png" alt="">  -->
        <a href="login">DISEÑA TU OUTFIT</a>
    </div>
    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, fugiat ab iusto, doloribus sapiente dignissimos obcaecati rerum, aliquid illo enim tenetur delectus. Cumque impedit voluptates corporis, cupiditate molestias nisi debitis.</p> -->



    <script>
        let submenu = document.getElementById("submenu");

        function toggleMenu() {
            submenu.classList.toggle("open-menu");
        }
    </script>
    <div class="cuerpo">



        <div class="slider">
            <figure>
                <div class="slide">
                    <a href="https://www.kancanjeanscolombia.com/nueva-coleccion"><img src="/img//IMG HOME/propaganda.jpg"
                            alt="estilo1"></a>
                </div>
                <div class="slide">
                    <a href=""><img src="/img/IMG OCASIONES/carrusel.jpg" alt="estilo2"></a>
                </div>
                <!-- <div class="slide">
                    <a href="https://kancanjeans.myvtex.com/_v/segment/admin-login/v1/login?returnUrl=%2FZapatos%3F"><img
                            src="/img/ropa3.webp" alt="estilo3"></a>
                </div>
                <div class="slide">
                    <a href="https://kancanjeans.myvtex.com/_v/segment/admin-login/v1/login?returnUrl=%2FZapatos%3F"><img
                            src="/img/ropaa1.webp" alt="estilo4"></a>
                </div> -->
            </figure>
        </div>
        <script src="i kan.js"></script>






        <div class="tendencias">
            <h2>TENDENCIAS</h2>
        </div>

        <div class="contenedor">
            <div class="box">
                <img src="/img/IMG HOME/GALERIA IMG1/1.jpg" alt="">
                <div class="overlays">
                    <p>Texto de overlay para la primera imagen</p>
                </div>
            </div>
            <div class="box">
                <img src="/img/IMG HOME/GALERIA IMG1/2 (3).jpg" alt="">
                <div class="overlays">
                    <p>Texto de overlay para la primera imagen</p>
                </div>
            </div>
            <div class="box">
                <img src="/img/IMG HOME/GALERIA IMG1/3.jpg" alt="">
                <div class="overlays">
                    <p>Texto de overlay para la primera imagen</p>
                </div>
            </div>
            <div class="box">
                <img src="/img/IMG HOME/GALERIA IMG1/4.jpg" alt="">
                <div class="overlays">
                    <p>Texto de overlay para la primera imagen</p>
                </div>
            </div>
            <div class="box">
                <img src="/img/IMG HOME/GALERIA IMG1/5.jpg" alt="">
                <div class="overlays">
                    <p>Texto de overlay para la primera imagen</p>
                </div>
            </div>
            <div class="box">
                <img src="/img/IMG HOME/GALERIA IMG1/6.jpg" alt="">
                <div class="overlays">
                    <p>Texto de overlay para la primera imagen</p>
                </div>
            </div>
            <div class="box">
                <img src="/img/IMG HOME/GALERIA IMG1/7.jpg" alt="">
                <div class="overlays">
                    <p>Texto de overlay para la primera imagen</p>
                </div>
            </div>
            <div class="box">
                <img src="/img/IMG HOME/GALERIA IMG1/8.jpg" alt="">
                <div class="overlays">
                    <p>Texto de overlay para la primera imagen</p>
                </div>
            </div>
            <div class="box">
                <img src="/img/IMG HOME/GALERIA IMG1/9.jpg" alt="">
                <div class="overlays">
                    <p>Texto de overlay para la primera imagen</p>
                </div>
            </div>
            <div class="box">
                <img src="/img/IMG HOME/GALERIA IMG1/10.jpg" alt="">
                <div class="overlays">
                    <p>Texto de overlay para la primera imagen</p>
                </div>
            </div>
            <div class="box">
                <img src="/img/IMG HOME/GALERIA IMG1/11.jpg" alt="">
                <div class="overlays">
                    <p>Texto de overlay para la primera imagen</p>
                </div>
            </div>
            <div class="box">
                <img src="/img/IMG HOME/GALERIA IMG1/12.jpg" alt="">
                <div class="overlays">
                    <p>Texto de overlay para la primera imagen</p>
                </div>
            </div>

        </div>

        <br>
        <div class="Carousel">
            <h2>Subcategory</h2>
            <div class="slick-list" id="slick-list">
                <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev"
                    onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
                        class="svg-inline--fa fa-chevron-left fa-w-10" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path fill="currentColor"
                            d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                        </path>
                    </svg>
                </button>
                <div class="slick-track" id="track">
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="/img/IMG HOME/imagenes Carrusel 2/1.1.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="/img/IMG HOME/imagenes Carrusel 2/2.2.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="/img/IMG HOME/imagenes Carrusel 2/3.3.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="/img/IMG HOME/imagenes Carrusel 2/4.4.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="/img/IMG HOME/imagenes Carrusel 2/5.5.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="/img/IMG HOME/imagenes Carrusel 2/6.6.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="/img/IMG HOME/imagenes Carrusel 2/7.7 (2).jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="/img/IMG HOME/imagenes Carrusel 2/8.8.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="/img/IMG HOME/imagenes Carrusel 2/9.9.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="/img/IMG HOME/imagenes Carrusel 2/10.1.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="/img/IMG HOME/imagenes Carrusel 2/11.1.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="/img/IMG HOME/imagenes Carrusel 2/12.1.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="/img/IMG HOME/imagenes Carrusel 2/13.1 (2).jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="/img/IMG HOME/imagenes Carrusel 2/14.1.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="/img/IMG HOME/imagenes Carrusel 2/15.1.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                </div>
                <button class="slick-arrow slick-next" id="button-next" data-button="button-next"
                    onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                        class="svg-inline--fa fa-chevron-right fa-w-10" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path fill="currentColor"
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
        <br>>
        <div class="Carousel">
            <h2>Subcategory</h2>
        </div>
        <div class="contenedorr">
            <div class="box">
                <img src="/img/IMG HOME/13.jpg" alt="">
                <div class="overlay">
                    <p>Texto para la primera imagen</p>
                </div>
            </div>
            <div class="box">
                <img src="/img/IMG HOME/14.jpg" alt="">
                <div class="overlay">
                    <p>Texto de overlay para la primera imagen</p>
                </div>
            </div>
            <div class="box">
                <img src="/img/IMG HOME/15.jpg" alt="">
                <div class="overlay">
                    <p>Texto de overlay para la primera imagen</p>
                </div>
            </div>


        </div>
    </div>
    <div class="regis">
        <marquee>Registrate <button>Registrate Gratis</button></marquee>

    </div>

    <br><br><br><br>


    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="/img/LOGOS BLANCO Y NEGRO/BLANCO.png" alt="Logo de SLee Dw">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SIGUENOS EN </h2>
                <div class="red-social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
            </div>
            <div class="box">
                <h2>SOMOS I KAN</h2>
                <p>Quienes Somos</p>
                <p>Preguntas frecuentes</p>
                <p>Comunicate con nosotros</p>
            </div>

            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Politica de tratamiento de <br>datos</p>
                <p>Terminos y Condiciones</p>
            </div>

            <div class="box">
                <h2>ATENCION AL CLIENTE</h2>
                <p>Politica de tratamiento de <br> datos</p>
                <p>Terminos y Condiciones</p>
            </div>



        </div>
        <div class="grupo-2">
            <small>2024 <b>Moda</b> - Todos los derechos reservados 2024. I kan Colombia</small>
        </div>
    </footer>

























    <!-- <footer>
        <div class="container-ft">
            <div class="footer-content">
                <div class="footer-div">
                    <div class="social-media">
                        <div class="logft">
                            <img src="/img/logo I KAN fondo transpaene recortado blanco.png" alt="">
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
    </div> -->
    <script src="/1.Home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script></script>
    {{-- <script src="/1.Home_login.js"></script> --}}
    <script src="{{ asset('js/home_login.js') }}"></script>
    <script src="{{ asset('js/1.contactos.js') }}"></script>
    {{-- <script src="/1.contactos.js"></script> --}}
</body>

</html>
