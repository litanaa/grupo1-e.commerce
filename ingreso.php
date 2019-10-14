<?php
<<<<<<< HEAD
require ('includes/functions.php');

session_star();

if ($_POST){
  $json = file_get_contents ('data/users.json');

$users = json_decode($json, true);

foreach ($users as $user) {
          if ($_POST ['email'] === $user ['email'] && password_verify($_POST ['password'],$user['password']) {
            $SESSION['user'] = [
          'email' => $uder ['email'],
      ];

      redirect ('perfil.php');
      break;
  }
}


=======
require 'includes/functions.php';


if ($_POST){
  $json = file_get_contents('data/users.json');

  $users = json_decode ($json, true);{
    foreach ($users as $user) {
      if ($_POST ["email"]) $user ["email"] && pasword_verify($_POST ["password"], ($user) ["password"])


       {$_SESSION ['user'] = [
        'email' => $user ['email'],

      ]
    }
  ;}
}
}

if ($_POST){
header ("Location:perfil.php");
exit;
}
>>>>>>> f54e20f5baa59746e8eaf7a54706f167d331f092
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
    <link rel="stylesheet" href="css/stylesingreso.css">
    <script src="https://kit.fontawesome.com/61e275e2c2.js"></script>
  </head>
  <body>

    <header>

      <?php include_once('partials/header.php');?>

    </header>

<div class="container">
<<<<<<< HEAD
<form class="row" action="validar.php" method="post">
  <div class="form-group"class="col -xs-12 col-md-6 col-lg-4s" style="width: 42rem;">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresá tu email">
=======
<form class="row" action="ingreso.php" method="post">
  <div class="form-group"class="col -xs-12 col-md-6 col-lg-4s" style="width: 42rem;">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresá tu email" name="email" value="">
>>>>>>> f54e20f5baa59746e8eaf7a54706f167d331f092
    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu email con nadie más.</small>
  </div>

  <div class="form-group"class="col -xs-12 col-md-6 col-lg-4s" style="width: 42rem;">
    <label for="exampleInputPassword1">Contraseña</label>
<<<<<<< HEAD
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
=======
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="email" value="">
>>>>>>> f54e20f5baa59746e8eaf7a54706f167d331f092
  </div>

  <div class="form-group form-check" class="col -xs-12 col-md-6 col-lg-4s" style="width: 42rem;">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <div class="col -xs-12 col-md-6 col-lg-4s" style="width: 42rem;">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>

<footer>
<<<<<<< HEAD
<?php include_once('partials/header.php');?>
=======
<?php include_once('partials/footer.php');?>
>>>>>>> f54e20f5baa59746e8eaf7a54706f167d331f092
</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
