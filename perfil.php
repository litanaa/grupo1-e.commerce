<?php


require "includes/functions.php";


if (!is_logged()){
  redirect ('ingreso.php');
 }

if ($_POST){
  $email=$POST["email"];
  $password=$POST["password"];
  $nombre=$POST["nombre"];
}

if ($_FILES) {
  if ($_FILES["imagen"]["error"] != 0){
    echo "Hubo un error al cargar la imagen";
  }
  else {
    $ext = pathinfo($_FILES ["imagen"]["name"], PATHINFO_EXTENSION);
    if ($ext != "jpg" && $ext != "jpeg" && $ext != "png") {
      echo "La imagen debe ser jpg o png <br>";
    }
    else {
      move_uploaded_file($_FILES ["imagen"]["tmp_name"], "data/imagen." . $ext);
    }
  }
}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="img/favicon-32x32.png" type="image/png">
    <title>Happy Home! - Perfil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" integrity="sha256-zmfNZmXoNWBMemUOo1XUGFfc0ihGGLYdgtJS3KCr/l0=" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/stylesingreso.css">
    <script src="https://kit.fontawesome.com/61e275e2c2.js"></script>
  </head>
  <body>
    <header>

      <?php include_once('partials/header.php');?>

    </header>

  <?php if($nombre == NULL) : ?>
    <span> No está logueado</span>
      <?else : ?>
      <span><?$nombre?></span>
    <?php endif; ?>

    <div class="container">
      <ul class="list-group list-group-horizontal">
        <li class="list-group-item"><b>Nombre y Apellido</b></li>
        <li class="list-group-item"></li>
      </ul>
      <ul class="list-group list-group-horizontal">
        <li class="list-group-item"><b>E-Mail</b></li>
        <li class="list-group-item"></li>
      </ul>
      <ul class="list-group list-group-horizontal">
        <li class="list-group-item"><b>Telefono</b></li>
        <li class="list-group-item"></li>
      </ul>
      <ul class="list-group list-group-horizontal">
        <li class="list-group-item"><b>Direccion</b></li>
        <li class="list-group-item">a</li>
      </ul>
      <ul class="list-group list-group-horizontal">
        <li class="list-group-item"><b>Ciudad</b></li>
        <li class="list-group-item"></li>
      </ul>

      <ul class="list-group list-group-horizontal">
        <li class="list-group-item"><b>Codigo postal</b></li>
        <li class="list-group-item"></li>
      </ul>
      <br>

      <form class="" action="perfil.php" method="post" enctype="multipart/form-data">

        <div class="form-group col-md-4">
          <label for="imagen">Cargá tu foto</label>
          <input type="file" class="" id="imagen" name="imagen" value="">
        </div>
    <input type="submit" name="" value="Enviar">

      </form>


    </div>

    <a href="logout.php">Cerrar Sesión</a>

    <footer>
      <?php include_once('partials/footer.php');?>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
