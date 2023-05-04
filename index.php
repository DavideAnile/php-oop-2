
<?php 


require_once './Models/Product.php';
require_once './db.php';


$dogProducts = [
    $nuovo1,
    $nuovo2,
    $nuovo3,
    $nuovo4,
    $nuovo5,
    $nuovo6,

];

$catProducts = [

    $gatto1,
    $gatto2, 
    $gatto3, 
    $gatto4, 
    $gatto5, 
    $gatto6,

];

?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>



<h1>E-commerce</h1>

<h3>Prodotti per cani</h3>


<div class="dog-card-container">



<?php 

foreach($dogProducts as $singleProduct){

    ?>


<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?= $singleProduct->image ?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $singleProduct->name ?></h5>
        <p class="card-text"><?= $singleProduct->description ?></p>
        <p class="card-text"><small class="text-muted">Prezzo : </small></p>
        <p class="card-text"><small class="text-muted">Categoria : </small></p>
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


<?php

foreach($catProducts as $singleCatProduct){


    ?>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?= $singleCatProduct->image ?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $singleCatProduct->name ?></h5>
        <p class="card-text"><?= $singleCatProduct->description ?></p>
        <p class="card-text"><small class="text-muted">Prezzo :</small></p>
        <p class="card-text"><small class="text-muted">Categoria : <?= $singleCatProduct->category ?></small></p>
      </div>
    </div>
  </div>
</div>


    <?php
}

?>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>