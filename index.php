
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
    $doghouse2,

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


<main>

<section class="first-section">

    <h2>Prodotti per cani</h2>
    
    
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
            <h5 class="card-title"><?= $singleProduct->name ?></h5><hr>
            <p class="card-text"><?= $singleProduct->description ?></p><hr>
            <p class="card-text"><small class="text-muted">Prezzo : <span class="fw-bold"><?= $singleProduct->getEuro() ?></span> </small></p><hr>
            <p class="card-text  "><small class="text-muted">Categoria : <?= $singleProduct->category ?> </small></p><hr>
    
            <?php 
            if(property_exists($singleProduct, 'dimension')){
                echo '<p class="card-text"><small class="text-muted">Dimensioni : ' . $singleProduct->dimension .' </small></p><hr>';
            } 
    
            if(property_exists($singleProduct, 'material')){
                echo '<p class="card-text"><small class="text-muted">Materiale : ' . $singleProduct->material .' </small></p>';
            } 
    
            if(property_exists($singleProduct, 'expirationDate')){
                echo '<p class="card-text"><small class="text-muted">Data di Scadenza : ' . $singleProduct->expirationDate .' </small></p><hr>';
            } 
            
            if(property_exists($singleProduct, 'quantity')){
                echo '<p class="card-text"><small class="text-muted">Quantità : ' . $singleProduct->quantity .' </small></p>';
            } 
    
            if(property_exists($singleProduct, 'type')){
                echo '<p class="card-text"><small class="text-muted">Tipo di gioco : ' . $singleProduct->type.' </small></p>';
            } 
    
            ?>
            
            
          </div>
        </div>
      </div>
    </div>
    
    
        <?php
    
    
    }
    
    ?>
        
    </div>
</section>

    
    
  

<section class="second-section">

    <h2>Prodotti per gatti</h2>
    
    
    <div class="cat-cards-container">
    
    
    
    <?php
    
    foreach($catProducts as $singleCatProduct){
    
    
        ?>
    
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row no-gutters">
        <div class="col-md-4 img-container">
          <img src="<?= $singleCatProduct->image ?>" class="card-img" alt="...">
        </div>
        <div class="col-md-8 info-container">
          <div class="card-body">
            <h5 class="card-title"><?= $singleCatProduct->name ?></h5><hr>
            <p class="card-text"><?= $singleCatProduct->description ?></p><hr>
            <p class="card-text"><small class="text-muted">Prezzo : <span class="fw-bold"><?= $singleCatProduct->getEuro() ?></span></small></p><hr>
            <p class="card-text"><small class="text-muted">Categoria : <?= $singleCatProduct->category ?></small></p><hr>
    
            <?php 
            if(property_exists($singleCatProduct, 'dimension')){
                echo '<p class="card-text"><small class="text-muted">Dimensioni : ' . $singleCatProduct->dimension .' </small></p><hr>';
            } 
    
            if(property_exists($singleCatProduct, 'material')){
                echo '<p class="card-text"><small class="text-muted">Materiale : ' . $singleCatProduct->material .' </small></p>';
            } 
    
            if(property_exists($singleCatProduct, 'expirationDate')){
                echo '<p class="card-text"><small class="text-muted">Data di Scadenza : ' . $singleCatProduct->expirationDate .' </small></p><hr>';
            } 
            
            if(property_exists($singleCatProduct, 'quantity')){
                echo '<p class="card-text"><small class="text-muted">Quantità : ' . $singleCatProduct->quantity .' </small></p>';
            } 
    
            if(property_exists($singleCatProduct, 'type')){
                echo '<p class="card-text"><small class="text-muted">Tipo di gioco : ' . $singleCatProduct->type.' </small></p>';
            } 
    
            ?>
    
          </div>
        </div>
      </div>
    </div>
    
    
        <?php
    }
    
    ?>
    
    </div>
</section>    
    

</main>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>