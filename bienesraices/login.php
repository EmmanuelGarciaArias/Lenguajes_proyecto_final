<?php
   //Incluye el header 
   require 'includes/app.php';
  $db = conectarDB();


  //Autenticar el usuario

  //Arreglo vacio para los errores en validaciones
  $errores = [];

  if($_SERVER['REQUEST_METHOD'] === 'POST' ) {
    

    $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) );
    $password = mysqli_escape_string($db, $_POST['password']);

    //Validaciones
    if(!$email) {
      $errores[] = "El email es obligatorio o no es valido";
    }

    if(!$password) {
      $errores[] = "El password en obligatorio";
    }

    if(empty($errores )) {
      //Revisar si el usuario existe
      $query = " SELECT * FROM usuarios WHERE email = '${email}' ";
      $resultado = mysqli_query($db, $query);

      


      if( $resultado->num_rows ) {
        //Revisar si el password es correcto
        $usuario = mysqli_fetch_assoc($resultado);

        //Verificar si el password es correcto
        $auth  =password_verify($password, $usuario['password']);
        
        if($auth) {
          //El usuario esta autenticado
          session_start();
          //Llenar el arregl o de la sesion
          $_SESSION['usuario'] = $usuario['email'];
          $_SESSION['login'] = true;

          header('Location: /admin');
          

        } else {
          $errores[] = "El password es incorrecto";
        }

      } else {
        $errores[] = "El usuario no existe";
      }

    }

  }



  incluirTemplate('header');
?>

  <main class="contenedor seccion contenido-centrado">
      <h1>Iniciar Sesion</h1>

      <?php foreach($errores as $error): ?>
        <div class="alerta error">
          <?php echo $error; ?>
        </div>
      <?php endforeach; ?>

      <form class="formulario" method="POST" novalidate>
      <fieldset>

        <legend>Email y Password</legend>

        <label for="email">Correo Electronico</label>
        <input type="email" name="email" placeholder="example@outlook.com" id="email" >

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Tu password" id="password" >

      </fieldset>
      <input type="submit" value="Iniciar Sesion" class="boton boton-verde">
  </main>

<?php
  incluirTemplate('footer');
?>