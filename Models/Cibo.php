<?php 

require_once __DIR__ . '/../Traits/Votable.php';


class Cibo extends Product {

    use Votable;

    public $expirationDate;
    public $quantity;

    function __construct(string $name , int $price , string $description, string $category , string $image , string $expirationDate , string $quantity){

        parent::__construct($name , $price , $description , $category , $image , $expirationDate);

        $this->expirationDate = $expirationDate;
        $this->quantity = $quantity;
    
        
    }
}

?>