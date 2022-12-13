<?php

  require 'includes/funciones.php';

  incluirTemplate('header');
?>

  <main class="contenedor seccion contenido-centrado">
    <h1>Guia para la decoracion de tu hogar</h1>

    
      <picture>
        <source srcset="build/img/destacada2.webp" type="image/webp">
        <source srcset="build/img/destacada2.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen de la Propiedad">
      </picture>

      <p class="informacion-meta">Escrito el: <span>20/10/2022</span> por: <span>Admin</span> </p>
      <div class="resumen-propiedad">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga culpa natus ut. Reprehenderit quaerat necessitatibus incidunt blanditiis id itaque? Est distinctio reiciendis voluptatibus recusandae impedit ad culpa at optio alias? Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere recusandae porro libero dolores! Est magni consequuntur earum? Dolorum dolor quod explicabo aut magnam amet adipisci voluptatem deleniti ad! Autem, nisi. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, deleniti atque. Nostrum expedita perspiciatis, illum aut enim molestiae iure? Nisi vitae aliquam quae quaerat. Quod alias quisquam molestias et ab.</p>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa accusamus, tenetur nihil, quae laboriosam, eum iusto ipsam temporibus odit perspiciatis voluptas aut ipsum. Ab nihil in accusamus quasi perspiciatis magni. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo maiores magni provident esse expedita sunt, sapiente ex impedit, suscipit atque dolor at recusandae quas ipsum nulla inventore nemo excepturi soluta!
        </p>
      </div>
  </main>

<?php
  incluirTemplate('footer');
 ?>