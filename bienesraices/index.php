<?php
  require 'includes/app.php';
  incluirTemplate('header', $inicio = true );
?>

  <main class="contenedor seccion">
    <h1>Mas Sobre Nosotros</h1>
    <div class="iconos-nosotros">
      <div class="icono">
        <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
        <h3>Seguridad</h3>
        <p>La principal ventaja y su mayor atractivo de invertir en una vivienda en un inmueble dentro de un fraccionamiento privado es la seguridad que se puede poseer. Se debe a que en los completos privados se proporciona el servicio de guardias de seguridad en las entradas.</p>
      </div>
      <div class="icono">
        <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
        <h3>Precio</h3>
        <p>La mayor ventaja de comprar una casa en fraccionamiento privado es la seguridad que vivir en un fraccionamiento puede proporcionar, esto debido a que usualmente estos complejos de casas cuentan con guardias de seguridad en la entrada del fraccionamiento, quiénes tienen la obligación de registrar a todas las personas que acceden y salen de la privada.</p>
      </div>
      <div class="icono">
        <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
        <h3>A Tiempo  </h3>
        <p>La calidad percibida del servicio es el resultado de un proceso de evaluación, en el cual los clientes comparan sus percepciones de la prestación del servicio recibido con lo que ellos esperaban del mismo.Es por eso que ofrecemos una atencion rapida y segura con todos nuestros clientes para crear un ambiente de confianza</p>
      </div>
    </div>
  </main>

  <section class="seccion contenedor">
    <h2>Casas y Departamentos en Venta</h2>

    <?php 
      include 'includes/templates/anuncios.php';
    ?>

    <div class="alinear-derecha">
        <a href="anuncios.php" class="boton-verde">Ver Todas</a>
      </div>
  </section>

  <section class="imagen-contacto">
    <h2>Encuentra la casa de tus sueños</h2>
    <p>“Vivir al abrigo de tu corazón y llamarlo siempre hogar.”</p>
    <!-- <a href="contacto.php" class="boton-amarillo">Contactanos</a>-->
  </section>
  
  <div class="contenedor seccion seccion-inferior">
    <section class="blog">
      <h3>Nuestro Blog</h3>

      <article class="entrada-blog">

        <div class="imagen">
          <picture>
            <source srcset="build/img/blog1.webp" type="image/webp">
            <source srcset="build/img/blog1.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/blog1.jpg" alt="Texto Entrada Blog">
          </picture>
        </div>

        <div class="texto-entrada">
          <a href="entrada.php">
            <h4>Terraza en el techo de tu casa</h4>
            <p class="informacion-meta">Escrito el: <span>09/12/2022</span> por: <span>Dany</span> </p>

            <p>
              Consejos para construir una terraza en el tehco de tu casa con los mejores materiales y ahorra una fortuna
            </p>
          </a>
        </div>

      </article>

      <article class="entrada-blog">

        <div class="imagen">
          <picture>
            <source srcset="build/img/blog2.webp" type="image/webp">
            <source srcset="build/img/blog2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/blog2.jpg" alt="Texto Entrada Blog">
          </picture>
        </div>

        <div class="texto-entrada">
          <a href="entrada.php">
            <h4>Guia para la decoracion de tu hogar</h4>
            <p class="informacion-meta">Escrito el: <span>10/12/2022</span> por: <span>Dany</span> </p>

            <p>
              Maximiza el espacio en tu hogar  con esta guia, aprende  a combinar muebles y colores
              par darle vida a tu espacio.
            </p>
          </a>
        </div>
      </article>
    </section>
    <section class="testimoniales">
      <h3>Testimoniales</h3>
      <div class="testimonial">
        <blockquote>
          El personal se comporto de una excelente forma, muy buena atencion y la casa que me ofrecieron
          cumple com todas mis expectativas.
        </blockquote>
        <p>-By Mane</p>
      </div>
    </section>
  </div>

 <?php
  incluirTemplate('footer');
 ?>