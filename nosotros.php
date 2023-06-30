<?php
include("header.php");

?>
<link href="css/style-nosotros.css" rel="stylesheet" />
<script src="js/nosotros.js"></script>

<section class="nosotros_opciones">

    <h1>Conoce más de PLANK</h1>
    <div class="nosotros_opciones-plank">
        <div class="quienes_somos" id="quienes-somos">
            <button onclick="quienes_somos()"><i class="fa-solid fa-users"></i>&nbsp;&nbsp;&nbsp;Quienes somos</button>
        </div>
        <div class="contactanos_sup">
            <button onclick="contactanos()"><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;&nbsp;Contáctanos</button>
        </div>
    </div>
</section>

<section id="quienes">
    <section class="quienes_somos-contenido">
        <div class="somos">
            <h1>Misión</h1>
            <div class="somos-texto"></div>
        </div>
        <div class="somos">
            <h1>Visión</h1>
            <div class="somos-texto"></div>

        </div>
        <div class="somos">
            <h1>Valores</h1>
            <div class="somos-texto"></div>

        </div>

        <div class="quienes_somos-imagen somos">
            <img src="img/nosotros2.png" alt="">

        </div>
    </section>
    <hr class="linea_separacion">

    <section class="nuestros_servicios">
        <div class="nuestros_servicios-titulo">
            <h1>Nuestros Servicios</h1>
        </div>
        <div class="carrousel_servicios">
            <div class="container">
                <div class="">
                    <input class="wgh-slider-target" type="radio" id="slide-1" name="slider" />
                    <input class="wgh-slider-target" type="radio" id="slide-2" name="slider" />
                    <input class="wgh-slider-target" type="radio" id="slide-3" name="slider" checked="checked" />
                    <input class="wgh-slider-target" type="radio" id="slide-4" name="slider" />
                    <input class="wgh-slider-target" type="radio" id="slide-5" name="slider" />
                    <div class="wgh-slider__viewport">
                        <div class="wgh-slider__viewbox">
                            <div class="wgh-slider__container">
                                <div class="wgh-slider-item">
                                    <div class="wgh-slider-item__inner">
                                        <figure class="wgh-slider-item-figure"><img class="wgh-slider-item-figure__image" src="img/servicios/servicios/desarrollo-web.jpg" alt="The 5th Exotic" />
                                            <figcaption class="wgh-slider-item-figure__caption"><a href="">Desaroollo Web</a></figcaption>
                                        </figure>
                                        <label class="wgh-slider-item__trigger" for="slide-1" title="Show product 1"></label>
                                    </div>
                                </div>
                                <div class="wgh-slider-item">
                                    <div class="wgh-slider-item__inner">
                                        <figure class="wgh-slider-item-figure"><img class="wgh-slider-item-figure__image" src="img/servicios/servicios/reparacion.jpg" alt="The 5th Exotic" />
                                            <figcaption class="wgh-slider-item-figure__caption"><a href="https://f4.bcbits.com/img/a3905613628_16.jpg">IMG 1</a><span>PLANK</span></figcaption>
                                        </figure>
                                        <label class="wgh-slider-item__trigger" for="slide-2" title="Show product 2"></label>
                                    </div>
                                </div>
                                <div class="wgh-slider-item">
                                    <div class="wgh-slider-item__inner">
                                        <figure class="wgh-slider-item-figure"><img class="wgh-slider-item-figure__image" src="img/nosotros.png" alt="The 5th Exotic" />
                                            <figcaption class="wgh-slider-item-figure__caption"><a href="https://f4.bcbits.com/img/a3905613628_16.jpg">IMG3</a><span>OLANK</span></figcaption>
                                        </figure>
                                        <label class="wgh-slider-item__trigger" for="slide-3" title="Show product 3"></label>
                                    </div>
                                </div>
                                <div class="wgh-slider-item">
                                    <div class="wgh-slider-item__inner">
                                        <figure class="wgh-slider-item-figure"><img class="wgh-slider-item-figure__image" src="img/image-4.jpg" alt="The 5th Exotic" />
                                            <figcaption class="wgh-slider-item-figure__caption"><a href="https://f4.bcbits.com/img/a3905613628_16.jpg">IMG4</a><span>PLANK</span></figcaption>
                                        </figure>
                                        <label class="wgh-slider-item__trigger" for="slide-4" title="Show product 4"></label>
                                    </div>
                                </div>
                                <div class="wgh-slider-item">
                                    <div class="wgh-slider-item__inner">
                                        <figure class="wgh-slider-item-figure"><img class="wgh-slider-item-figure__image" src="img/image-5.jpg" alt="RYSY - Traveler LP" />
                                            <figcaption class="wgh-slider-item-figure__caption"><a href="https://picsum.photos/id/237/480/480">IMG5</a><span>PLANK</span></figcaption>
                                        </figure>
                                        <label class="wgh-slider-item__trigger" for="slide-5" title="Show product 5"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

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



<?php
include("footer.php");
?>