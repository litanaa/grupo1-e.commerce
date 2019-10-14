<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="img/favicon-32x32.png" type="image/png">
    <title>Nuestro sitio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/61e275e2c2.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" integrity="sha256-zmfNZmXoNWBMemUOo1XUGFfc0ihGGLYdgtJS3KCr/l0=" crossorigin="anonymous" />
        <link rel="stylesheet" href="css/styles.css">
  </head>


  <body>


<header>

  <?php include_once('partials/header.php');?>

</header>


<div class="container">
  <div class="jumbotron">
      <h1 class="display-4s">Happy Home!</h1>
      <p class="lead">Te brindamos los productos para que la mejor experiencia, la vivas en tu hogar.</p>
      <hr class="my-4">
      <p>Encontrá todos los productos para crear tu propio espacio.</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Conocenos!</a>
      </div>
</div>

<main>


  <section class="row">

    <article>
    <div class="card" class="col -xs-12 col-md-6 col-lg-4s" style="width: 18rem;">
  <img class="producto" src="img/simetria.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Cuadros</h5>
    <p class="card-text">Dale vida a tus paredes</p>
    <a href="detalle.php" class=>más +</a>
  </div>
</div>
  </article>

  <article>
      <div class="card" class="col -xs-12 col-md-6 col-lg-4s" style="width: 18rem;">
  <img class="producto" src="img/deco.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Deco</h5>
  <p class="card-text"> El foco está en los detalles</p>
  <a href="deco.php" class=>más +</a>
  </div>
  </div>
  </article>

  <article>
      <div class="card" class="col -xs-12 col-md-6 col-lg-4s" style="width: 18rem;">
  <img class="producto" src="img/mesas.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">Mesas</h5>
  <p class="card-text"> Armá tus espacios </p>
  <a href="mesas.php" class=>más +</a>
  </div>
  </div>
  </article>

  <article>
      <div class="card" class="col -xs-12 col-md-6 col-lg-4s" style="width: 18rem;">
<img class="producto" src="img/lampara.jpg" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title">Lámparas</h5>
  <p class="card-text">Dale luz!</p>
  <a href="lamparas.php" class=>más +</a>
</div>
</div>
</article>

<article>
    <div class="card" class="col -xs-12 col-md-6 col-lg-4s" style="width: 18rem;">
<img class="producto" src="img/canasto.jpg" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">Canástos & Contenedores</h5>
<p class="card-text"> La manera más fácil de organizarte </p>
<a href="canastos.php" class=>más +</a>
</div>
</div>
</article>

<article>
    <div class="card" class="col -xs-12 col-md-6 col-lg-4s" style="width: 18rem;">
<img class="producto" src="img/almohadones.jpg.webp" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">Almohadones</h5>
<p class="card-text"> Buscá estar cómodo</p>
<a href="almohadones.php" class=>más +</a>
</div>
</div>
</article>

  </section>
</main>

<footer>

<?php include_once('partials/footer.php');?>

</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  </body>
</html>
