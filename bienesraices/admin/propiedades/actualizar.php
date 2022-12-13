<?php
  //NOTA DEL DIA: REVISAR LA CLASE 376 Y 377 EN CASO DE PROBLEMAS CON ACTUALIZAR LAS PROPIEDADES
  //CODIGO PARA PROTEGER LAS RUTAS DE ADMINISTRADOR
use App\Propiedad;
use App\Vendedor;
use Intervention\Image\ImageManagerStatic as Image;

require '../../includes/app.php';
  estaAutenticado();
  
  //Validar la URL para que sea un ID valido de la propiedad
  $id = $_GET['id'];
  $id = filter_var($id, FILTER_VALIDATE_INT);

  if(!$id) {
    header('Location: /admin');
  }
  //Obtiene los datos de la propiedad
  $propiedad = Propiedad::find($id);
  
  //Consulta para obtener todos los vendedores
  $vendedores = Vendedor::all();
  
  //Arreglo con mensajes de errores
  $errores = Propiedad::getErrores();

  
  //Ejecuta el codigo despues de que el usuario envia el formulario
  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    //Asignar los atributos
    $args = $_POST['propiedad'];

    $propiedad->sincronizar($args);
    
    //Validacion
    $errores = $propiedad->validar();

    //Subida de archivos

    //Generar un nombre unico para cada imagen
    $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";

    //Setear  la imagen
    //Realiza un resize a la imagen con intervention
    if($_FILES['propiedad']['tmp_name']['imagen']) {
      $image = Image::make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800,600);
      $propiedad->setImagen($nombreImagen);
    }

    //Revisar que el array de errores este vacio
    if(empty($errores)) {
      //Almacenar la imagen en la DB
      if($_FILES['propiedad']['tmp_name']['imagen']){
      $image->save(CARPETA_IMAGENES . $nombreImagen);
      }
      $propiedad->guardar();
    }
    
  }
  
  incluirTemplate('header');
?>

  <main class="contenedor seccion">
    <h1>Actualizar Propiedad</h1>

    <a href="/admin" class="boton boton-verde">Volver</a>
    <?php foreach($errores as $error): ?>
    <div class="alerta error">
      <?php  echo $error; ?>
    </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST" enctype="multipart/form-data">
      <!-- incluye el template de formulario -->
      <?php include '../../includes/templates/formulario_propiedades.php' ?>
      <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">
    </form>

  </main>

<?php
  incluirTemplate('footer');
 ?>