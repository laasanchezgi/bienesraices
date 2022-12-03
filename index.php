<?php 
    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = true);
?>

    <!--CONTENIDO PRINCIPAL-->
    <main class="contenedor seccion">
        <h1>Más sobre nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono de seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>
                    Quisque sed lorem ac metus ultricies vehicula eu sollicitudin risus. Aliquam erat volutpat.In eu augue orci.
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono de precio" loading="lazy">
                <h3>Precio</h3>
                <p>
                    Quisque sed lorem ac metus ultricies vehicula eu sollicitudin risus. Aliquam erat volutpat. Morbi viverra malesuada vestibulum. 
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono de tiempo" loading="lazy">
                <h3>A tiempo</h3>
                <p>
                    Quisque sed lorem ac metus ultricies vehicula eu sollicitudin risus. Aliquam erat volutpat. Morbi viverra malesuada vestibulum.
                </p>
            </div>
        </div>
    </main>

    <!--OTRA SECCIÓN-->
    <section class="seccion contenedor">
        <h2>Casas y apartamentos en venta</h2>
        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio1.jpg" alt="Anuncio">
                </picture>
                <!--Anuncios-->
                <div class="contenido-anuncio">
                    <h3>Casa de lujo en el lago</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$3.000.000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="Icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono habitaciones">
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="anuncio.html" class="boton-amarillo-block">
                        Ver propiedad
                    </a>
                </div> <!--.CONTENIDO-ANUNCIO-->
            </div>  <!--.ANUNCIO-->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio2.webp" type="image/webp">
                    <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio2.jpg" alt="Anuncio">
                </picture>
                <!--Anuncios-->
                <div class="contenido-anuncio">
                    <h3>Casa terminados de lujo</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$3.000.000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img loading="lazy" src="build/img/icono_wc.svg" alt="Icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono habitaciones">
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="anuncio.html" class="boton-amarillo-block">
                        Ver propiedad
                    </a>
                </div> <!--.CONTENIDO-ANUNCIO-->
            </div>  <!--.ANUNCIO-->

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/anuncio3.jpg" alt="Anuncio">
                </picture>
                <!--Anuncios-->
                <div class="contenido-anuncio">
                    <h3>Casa con piscina</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$3.000.000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img loading="lazy" src="build/img/icono_wc.svg" alt="Icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono habitaciones">
                            <p>4</p>
                        </li>
                    </ul>

                    <a href="anuncio.html" class="boton-amarillo-block">
                        Ver propiedad
                    </a>
                </div> <!--.CONTENIDO-ANUNCIO-->
            </div>  <!--.ANUNCIO-->
        </div> <!--.CONTENEDOR ANUNCIOS-->

        <div class="alinear-derecha">
            <a href="anuncios.html" class="boton-verde">Ver todas</a>
        </div>
    </section>

    <!--CONTACTO-->
    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a href="contacto.html" class="boton-amarillo">Contactános</a>
    </section>

    <!--BLOG-->
    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro blog</h3>
            <!--ARTICULO-->
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Entrada de blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>05/11/2021</span> por: <span>Admin.</span></p>
                        <p>
                            Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero
                        </p>
                    </a>
                </div>
            </article> <!--.ARTICULO-->
            <!--ARTICULO-->
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Entrada de blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Guía para la decoración de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>05/11/2021</span> por: <span>Admin.</span></p>
                        <p>                        
                            Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio
                        </p>
                    </a>
                </div>
            </article> <!--.ARTICULO-->
        </section>

        <!--TESTIMONIAL-->
        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    El personal se comportó de excelente forma, muy buena atención y la casa que me ofrecieron cumplió con todas mis expectativas.
                </blockquote>
                <p> -Alejandra Giraldo</p>
            </div>
        </section>
    </div>

<?php
    include './includes/templates/footer.php';
?> 