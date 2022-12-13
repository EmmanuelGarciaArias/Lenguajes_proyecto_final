<?php
  require 'includes/app.php';
  use App\Propiedad;
  use App\Vendedor;
  $vendedores = Vendedor::all();

  $id = $_GET['id'];
  $id = filter_var($id, FILTER_VALIDATE_INT);

  if(!$id) {
    header('Location: /');
  }
 
  $propiedad = Propiedad::find($id);
  
  incluirTemplate('header');
?>

  <main class="contenedor seccion contenido-centrado">
    <h1><?php echo $propiedad->titulo; ?></h1>

        <img loading="lazy" src="/imagenes/<?php echo $propiedad->imagen; ?>" alt="Imagen de la Propiedad">
      

      <div class="resumen-propiedad">
        <p class="precio">$<?php echo $propiedad->precio; ?> MXN</p>
        <ul class="iconos-caracteristicas"> 
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
            <p><?php echo $propiedad->wc; ?></p>
          </li>
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
            <p><?php echo $propiedad->estacionamiento; ?></p>
          </li>
          <li>
            <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorios">
            <p><?php echo $propiedad->habitaciones; ?></p>
          </li>
        </ul>
        <p><?php echo $propiedad->descripcion; ?></p>
        <fieldset>
        <legend>Vendedor</legend>
        <label for="vendedor">Vendedor</label>
          <select name="propiedad[vendedores_id]" id="vendedor">
            <option selected value="">-- Seleccione --</option>
            <?php foreach($vendedores as $vendedor) { ?>
              <option
              <?php echo $propiedad->vendedores_id === $vendedor->id ? 'selected' : ''; ?> 
              value="<?php echo s($vendedor->id); ?>"><?php echo s($vendedor->nombre) . " " . s($vendedor->apellido) . " " . s($vendedor->telefono); ?></option>
              <?php } ?>
          </select>
      </fieldset>
      </div>
  </main>
  
  <?php
  mysqli_close($db);
  incluirTemplate('footer');
 ?>