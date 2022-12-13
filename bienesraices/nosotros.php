<?php

  require 'includes/app.php';

  incluirTemplate('header');
?>

  <main class="contenedor seccion">
    <h1>Conoce Sobre Nosotros</h1>

    <div class="contenido-nosotros">
      <div class="imagen">
        <picture>
          <source srcset="build/img/nosotros.webp" type="image/webp">
          <source srcset="build/img/nosotros.jpg" type="image/jpeg">
          <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
        </picture>
      </div>
      <div class="texto-nosotros">
        <blockquote>
          25 Años de experiencia
        </blockquote>
        <p>
          <b>Misión</b>
            Brindar un servicio de asesoría inmobiliaria personalizada orientada a cumplir con las exigencias de nuestros clientes. Trabajamos con ética profesional, con honestidad y discreción en todas las etapas de la venta, compra o alquiler. Nos basamos en nuestra experiencia y capacitación en el sector.
            <br>
            <br>
            <b>Visión</b>
            Ser la mejor alternativa para quienes quieren la ayuda de un profesional inmobiliario, desde una relación cercana y resolutiva, ofreciendo las propuestas más innovadoras. Que nuestros clientes se sientan plenamente acompañados y asesorados durante todo el proceso de compra de una propiedad
            <br>
            <br>
            <b> Valores </b>
            Proactividad
            Tenemos iniciativa. Elaboramos un plan de marketing individualizado a cada propiedad. Tratamos de adelantarnos a las situaciones adversas con el único objetivo de ofrecer un asesoramiento de calidad.
            <br>
            <br>
            <b> Pasión</b>
            Disfrutamos con nuestro trabajo. Somos expertos y dedicados con nuestra labor intermediaria para lograr sacar el mayor rendimiento de nuestras propiedades.
            <br>
            <br>
            <b> Profesionalidad </b>
            Siempre que ofrecemos soluciones, lo hacemos desde el conocimiento técnico de la materia. Trabajamos con propiedades con alto potencial por lo que la exigencia en el servicio debe ser máxima. En Vía de la Plata Inmobiliaria cada cliente es único; respetamos sus preferencias por encima de todo y nos adaptamos a ellas.</p>
      </div>
    </div>
  </main>

  <section>
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
  </section>

<?php
  incluirTemplate('footer');
 ?>