<?php 

class Product {

    public $name;
    public $price;
    public $description;
    public $category;
    public $image;


    function __construct(string $name , int $price , string $description, string $category , string $image){

        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->category = $category;
        $this->image = $image;

    }

    function getEuro(){
        return $this->price . " &euro;" ;
    }
    
        
    

}

?>