
<?php 


require_once './Models/Product.php';
require_once './Models/Cibo.php';
require_once './Models/Cuccia.php';
require_once './Models/Gioco.php';
require_once './db.php';


$dogProducts = [
    $crocchette,
    $aromaDog,
    $croccantini,
    $dogBall,
    $doghouse,
    $dogfood2,
    $dogfood2,

];

$catProducts = [

    $kittenMice,
    $cucciaIglò,
    $beapher,
    $catpool,
    $catfood,
];

?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <!-- Font-awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>
<body>



<h1>E-commerce</h1>
<hr>

<h3>Prodotti per cani</h3>


<div class="dog-cards-container">



<?php 

foreach($dogProducts as $singleProduct){

    ?>


<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4 img-container">
      <img src="<?= $singleProduct->image ?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $singleProduct->name ?></h5>
        <p class="card-text"><?= $singleProduct->description ?></p>
        <p class="card-text"><small class="text-muted">Prezzo : <span class="fw-bold"><?= $singleProduct->getEuro() ?></span> </small></p>
        <p class="card-text"><small class="text-muted">Categoria : <?= $singleProduct->category ?> </small></p>
      </div>
    </div>
  </div>
</div>


    <?php


}

?>
    
</div>


<hr>

<h3>Prodotti per gatti</h3>


<div class="cat-cards-container">



<?php

foreach($catProducts as $singleCatProduct){


    ?>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4 img-container">
      <img src="<?= $singleCatProduct->image ?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $singleCatProduct->name ?></h5>
        <p class="card-text"><?= $singleCatProduct->description ?></p>
        <p class="card-text"><small class="text-muted">Prezzo : <span class="fw-bold"><?= $singleCatProduct->getEuro() ?></span></small></p>
        <p class="card-text"><small class="text-muted">Categoria : <?= $singleCatProduct->category ?></small></p>
      </div>
    </div>
  </div>
</div>


    <?php
}

?>

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>