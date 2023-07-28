<?php
include("header.php");
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link href="css/style-nosotros.css" rel="stylesheet" />

<section class="nosotros_opciones">

    <h1>Conoce más de PLANK</h1>
    <div class="nosotros_opciones-plank">
        <div class="quienes_somos" id="quienes-somos">
            <div class="espacio-libre"></div>
            <button onclick="quienes_somos()"><i class="fa-solid fa-users"></i>&nbsp;&nbsp;&nbsp;Quienes somos</button>
            <div class="linea-select" id="linea-select-quienes"></div>
        </div>
        <div class="contactanos_sup">
            <div class="espacio-libre"></div>
            <button onclick="contactanos()"><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;&nbsp;Contáctanos</button>
            <div class="linea-select" id="linea-select-contactanos"></div>
        </div>
    </div>
</section>

<section id="quienes">
    <section class="quienes_somos-contenido">
        <div class="quienes_somos-imagen somos">
            <img src="img/nosotros2.png" alt="">
        </div>
        <div class="somos">
            <h1>Misión</h1>
            <div class="somos-texto">
                <p>
                    En PLANK, nuestra misión es ser líderes en brindar soluciones tecnológicas innovadoras y de vanguardia
                    en la ciudad de Huánuco, Perú. Nos comprometemos a satisfacer las necesidades y superar las expectativas
                    de nuestros clientes, ofreciendo productos y servicios de alta calidad, confiables y personalizados.
                    Buscamos contribuir al desarrollo tecnológico de nuestra región y fomentar el talento local para generar
                    un impacto positivo en la sociedad y el entorno empresarial.
                </p>
            </div>
        </div>
        <div class="somos">
            <h1>Visión</h1>
            <div class="somos-texto">
                <p>
                    En PLANK, aspiramos a expandir nuestra presencia y posicionarnos como un referente en soluciones
                    tecnológicas a nivel nacional. Buscamos ser reconocidos por nuestra excelencia en el servicio al cliente,
                    la innovación constante y la búsqueda de nuevas oportunidades de negocio. Deseamos consolidar una
                    cultura corporativa basada en el trabajo en equipo, la ética profesional y el desarrollo integral de
                    nuestro talento humano. Nuestra visión es convertirnos en un actor clave en el impulso de la
                    transformación digital en Huánuco y el resto del país, colaborando en el crecimiento sostenible y
                    mejorando la calidad de vida de las personas a través de la tecnología.
                </p>
            </div>

        </div>
        <div class="somos">
            <h1>Valores</h1>
            <div class="somos-texto">
                <ul>
                    <li>
                        <p>Trabajo en equipo.</p>
                    </li>
                    <li>
                        <p>Confianza</p>
                    </li>
                    <li>
                        <p>Responsabilidad social</p>
                    </li>
                    <li>
                        <p>Flexibilidad y adaptabilidad</p>
                    </li>
                    <li>
                        <p>Transparencia</p>
                    </li>
                    <li>
                        <p>Pasión por la tecnología</p>
                    </li>
                    <li>
                        <p>Innovación</p>
                    </li>
                    <li>
                        <p>Excelencia</p>
                    </li>
                </ul>
            </div>

        </div>


    </section>
    <hr class="linea_separacion">

    <div class="body-swiper">
        <section class="nuestros-servicios">
            <h2>Nuestros Servicios</h2>
            <div class="separacion">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="img/servicios/reparacion/servicioReparacion.jpg" alt="">
                            <h1 onclick="window.location.href = 'servicios/reparacion.php'">REPARACION</h1>
                        </div>
                        <div class="swiper-slide">
                            <img src="img/servicios/instalacion/servicioInstalacion.jpg" alt="">
                            <h1 onclick="window.location.href = 'servicios/instalacion.php'">INSTALACION</h1>
                        </div>
                        <div class="swiper-slide">
                            <img src="img/servicios/desarrolloWeb/servicioDesarrolloWeb.jpg" alt="">
                            <h1 onclick="window.location.href = 'servicios/desarrollo-web.php'">DESARROLLO WEB</h1>
                        </div>
                        <div class="swiper-slide prox">
                            <img src="img/servicios/casasInteligentes/proximamente.jpg" alt="">
                            <h1 class="h1-prox">PROXIMAMENTE: Casas Inteligentes</h1>
                        </div>
                        <div class="swiper-slide prox">
                            <img src="img/servicios/Arduino/proximamente.jpg" alt="">
                            <h1 class="h1-prox">PROXIMAMENTE: Arduino</h1>
                        </div>
                        <div class="swiper-slide prox">
                            <img src="img/servicios/Consejeria/proximamente.jpg" alt="">
                            <h1 class="h1-prox">PROXIMAMENTE: Consejeria</h1>
                        </div>
                        <div class="swiper-slide prox">
                            <img src="img/servicios/IAs/proximamente.jpg" alt="">
                            <h1 class="h1-prox">PROXIMAMENTE: IA's</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</section>
<section id="contactanos">
    <section class="contactanos">
        <div class="contactanos_info">
            <div class="info_contacto">
                <i class="fa-solid fa-clock"></i>&nbsp;&nbsp;
                <h1>Horario de atención <br>
                    8am - 1pm / 2pm - 7pm</h1>
            </div>
            <div class="info_contacto">
                <i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;
                <h1>plankservice@gmail.com</h1>
            </div>
            <div class="info_contacto">
                <i class="fa-solid fa-phone"></i>&nbsp;&nbsp;
                <h1>+51 912 841 899</h1>
            </div>
            <div class="info_contacto">
                <i class="fa-solid fa-phone"></i>&nbsp;&nbsp;
                <h1>+51 912 841 899</h1>
            </div>
        </div>
        <div class="contactanos_redes-icono">
            <a href="" class=""><i class="fa-brands fa-square-facebook"></i></a>
            <a href="" class=""><i class="fa-brands fa-square-instagram"></i></a>
            <a href="" class=""><i class="fa-brands fa-linkedin"></i></a>
            <a href="" class=""><i class="fa-brands fa-square-twitter"></i></a>
        </div>

    </section>
    <section class="formulario_contacto">
        <div class="formulario-contenido">
            <h1>FORMULARIO DE CONTACTO</h1>
            <form class="" action="procesar_formulario.php" method="POST">
                <input class="formulario" type="text" id="nombre" name="nombre" placeholder="Nombre" required>

                <input class="formulario" type="text" id="numero" name="numero" placeholder="Número" required><br><br>

                <select class="formulario_comsulta" id="opciones" name="Consulta">
                    <option value="opcion1">Opción 1</option>
                    <option value="opcion2">Opción 2</option>
                    <option value="opcion3">Opción 3</option>
                </select><br><br>

                <textarea id="mensaje" name="mensaje" rows="4" cols="50" placeholder="Mensaje" required></textarea><br><br>

                <button class="enviar">Enviar</button>
            </form>
        </div>

    </section>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="js/nosotros.js"></script>

<?php
include("footer.php");
?>