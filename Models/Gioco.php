<?php 

require_once __DIR__ . '/../Traits/Votable.php';

class Gioco extends Product {

    use Votable;

    public $type ; 

    function __construct(string $name , int $price , string $description, string $category , string $image , string $type){

        parent::__construct($name , $price , $description , $category , $image);

        $this->type = $type;
    
        
    }
}

?>