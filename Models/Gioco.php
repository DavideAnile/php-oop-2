<?php 

class Gioco extends Product {

    public $type ; 

    function __construct(string $name , int $price , string $description, string $category , string $image , string $type){

        parent::__construct($name , $price , $description , $category , $image);

        $this->type = $type;
    
        
    }
}

?>