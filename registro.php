<?php

if ($_POST){

  $json = file_get_contents ('data/users.jason');

  $users = json_decode($json, true);

  $users[] = [

    'email' => $_POST['email'],
    'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
    'telefono'=>$POST["telefono"],
    'nombre'=>$POST["nombre"],
    'address'=>$POST["address"],
    'ciudad'=>$POST["ciudad"],
    'codigoPostal'=>$POST["codigoPostal"],

  ];

$json = json_encode($users, JSON_PRETTY_PRINT);

file_put_contents('data/users.json', $json);

}

if ($_POST){
header ("Location:perfil.php");
exit;
}

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="img/favicon-32x32.png" type="image/png">
    <title>Happy Home!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" integrity="sha256-zmfNZmXoNWBMemUOo1XUGFfc0ihGGLYdgtJS3KCr/l0=" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/stylesregistro.css">
    <script src="https://kit.fontawesome.com/61e275e2c2.js"></script>
  </head>


  <body>

    <header>

      <?php include_once('partials/header.php');?>

    </header>



  <form action="registro.php" method="post">
  <div class="row">
    <div class="elquehayquearreglar" class="form-group" class="col -xs-12 col-md-6 col-lg-4s" style="width: 32rem;">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="">

      <?php if ($_POST)
        if (filter_var($_POST ["email"], FILTER_VALIDATE_EMAIL) == FALSE) : ?>
        <span>El mail no tiene el formato correcto!</span>
        <?php endif; ?>

    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Contraseña</label>
      <input type="password" class="form-control" id="password" placeholder="Password" name="password" value="">
    </div>
    <div class="form-group col-md-6">
      <label for="Telefono">Teléfono</label>
      <input type="number" class="form-control" id="Telefono" placeholder="Telefono" name="Telefono" value="">
    </div>
  </div>
  <div class="form-group"class="col -xs-12 col-md-6 col-lg-4s" style="width: 32rem;" >
    <label for="inputNombre">Nombre y Apellido</label>
    <input type="text" class="form-control" id="nombre" placeholder="Manyula" name="nombre" value="">
  </div>

  <?php if ($_POST)
    if (strlen ($_POST ["nombre"]) == 0) : ?>
    <span>No llenaste el nombre!</span>
    <?php endif; ?>


  <div class="form-group"class="col -xs-12 col-md-6 col-lg-4s" style="width: 32rem;">
    <label for="inputAddress">Dirección</label>
    <input type="text" class="form-control" id="address" placeholder="Av. Siempre viva 742" name="address" value="">
  </div>
  <div class="form-row "class="col -xs-12 col-md-6 col-lg-4s" style="width: 32rem;">
    <div class="form-group col-md-6">
      <label for="inputCity">Ciudad</label>
      <input type="text" class="form-control" id="ciudad" name="ciudad" value="">
    </div>

    <div class="form-group col-md-4">
      <label for="inputZip">Cód. Postal</label>
      <input type="text" class="form-control" id="codigoPostal"name="codigoPostal" value="">
    </div>
    <?php if ($_POST)
      if (is_numeric ($_POST ["codigoPostal"]) == false) : ?>
      <span>El código debe ser numérico!</span>
      <?php endif; ?>

  </div>

  <button type="submit" class="btn btn-primary">Sign in</button>
</form>


<footer>
  <?php include_once('partials/footer.php');?>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
