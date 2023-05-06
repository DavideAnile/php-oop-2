<?php 

require_once __DIR__ . '/../Traits/Votable.php';

class Cuccia extends Product{

    use Votable;

    public $material;
    public $dimension;

    function __construct(string $name , int $price , string $description, string $category , string $image, string $material, string $dimension){

        parent::__construct($name , $price, $description , $category , $image);

        $this->material = $material;
        $this->dimension = $dimension;

    }
    
        
    

}

?>