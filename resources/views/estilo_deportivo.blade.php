<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/LOGOS BLANCO Y NEGRO/BLANCO.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/estilo_casual.css') }}">
    <title>Buscar Prendas - I kan </title>
    <link rel="stylesheet" href="/search.css">
</head>

<body onload="fetchSearchResults()">

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
        <section class="homes">
            <div class="form_container">
                <i class="uil uil-times form_closed">X</i>
                <!-- imagen del inicio de secion  -->

                <div>
                    <img src="/img/qr.png" alt="" height="10">
                </div>
            </div>
        </section>




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
    <div class="maps">

        <br><br>

    </div>

    <div class="cuadre-busc">
        <script>
            let submenu = document.getElementById("submenu");
            function toggleMenu() {
                submenu.classList.toggle("open-menu");
            }
        </script>
    </div>


    <br>

    <script async src="https://cse.google.com/cse.js?cx=b751aa8b758cc4d6a"></script>

    <div class="gcse-search"></div>
    <br>

    <div class="maps">
        <div class="maps2">
            <li>
                <h1>BUSQUEDA OUTFIT</h1>
            </li>

            <li>
                <a href="/ubicacion.htm" class="button-link"><button>UBICA NUESTROS ALIADOS <img src="/img/mapa (2).png"
                            height="10px"></button></a>
                <!-- <img src="/img/mapa (2).png" alt=""> -->
            </li>
        </div>
    </div>



    <br><br>
    <div id="search-results"></div>

    <script>
        function fetchSearchResults() {
            const apiKey = 'AIzaSyA0V0HiQ_c5wWtU61z2EfAQkduUl1Z1XeM';
            const searchEngineId = 'b751aa8b758cc4d6a';
            const queries = ['gaban', 'blazer', 'jeans', 'blusas', 'botas', 'botines',
            'gafas']; // Lista de términos de búsqueda

            const searchResultsDiv = document.getElementById('search-results');
            searchResultsDiv.innerHTML = ''; // Limpiar resultados anteriores

            // Establece el estilo de diseño de cuadrícula para la galería
            searchResultsDiv.style.display = 'grid';
            searchResultsDiv.style.gridTemplateColumns = 'repeat(auto-fill, minmax(200px, 1fr))';
            searchResultsDiv.style.gap = '30px';

            // Itera sobre cada término de búsqueda y realiza una solicitud de búsqueda independiente
            queries.forEach(query => {
                const url =
                    `https://www.googleapis.com/customsearch/v1?key=${apiKey}&cx=${searchEngineId}&q=${query}`;

                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        // Verifica si data.items existe antes de procesar los resultados
                        if (!data.items) {
                            console.error(`No hay resultados para la consulta "${query}".`);
                            return;
                        }

                        // Procesa los resultados de búsqueda
                        data.items.forEach(result => {
                            const title = result.title;
                            const link = result.link;

                            // Busca la imagen previa en el pagemap (si está disponible)
                            const imageLink = result.pagemap?.cse_thumbnail?.[0]?.src ?? '';

                            // Crea un elemento para mostrar el resultado de búsqueda
                            const resultItem = document.createElement('div');
                            resultItem.style.border = '1px solid #ccc';
                            resultItem.style.padding = '20px';
                            resultItem.style.borderRadius = '5px';

                            resultItem.innerHTML = `
                        <a href="${link}" target="_blank">
                            <div style="display: flex; flex-direction: column; align-items: center;">
                                ${imageLink ? `<img src="${imageLink}" alt="Thumbnail" style="width: 200px; height: 270px; margin-bottom: 10px;">` : ''}
                                <p style="margin: 0; text-align: center;">${title}</p>
                            </div>
                        </a>
                    `;

                            searchResultsDiv.appendChild(resultItem);
                        });
                    })
                    .catch(error => console.error('Error fetching search results:', error));
            });
        }



        // function fetchSearchResults() {
        //     const apiKey = 'AIzaSyA0V0HiQ_c5wWtU61z2EfAQkduUl1Z1XeM';
        //     const searchEngineId = 'b751aa8b758cc4d6a';
        //     const query = ["vestido"]&&["bolsos"]||["blusas"];



        //     const url = `https://www.googleapis.com/customsearch/v1?key=${apiKey}&cx=${searchEngineId}&q=${query}`;

        //     fetch(url)
        //         .then(response => response.json())
        //         .then(data => {
        //             const results = data.items;
        //             const searchResultsDiv = document.getElementById('search-results');
        //             searchResultsDiv.innerHTML = '';

        //             results.forEach(result => {
        //                 const title = result.title;
        //                 const link = result.link;
        //                 const imageLink = result.pagemap ? (result.pagemap.cse_thumbnail ? result.pagemap.cse_thumbnail[0].src : '') : '';

        //                 const resultItem = document.createElement('div');
        //                 resultItem.innerHTML = `
    //                     <div style="display: flex; align-items: center; margin-bottom: 10px;">
    //                         <img src="${imageLink}" alt="Thumbnail" style="width: 100px; height: 100px; margin-right: 20px;">
    //                         <p style="margin: 0;"><a href="${link}" target="_blank">${title}</a></p>
    //                     </div>
    //                 `;
        //                 searchResultsDiv.appendChild(resultItem);
        //             });
        //         })
        //         .catch(error => console.error('Error fetching search results:', error));
        // }
    </script>
    <script src="#"></script>
</body>

</html>
