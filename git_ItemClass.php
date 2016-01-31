<?php
//item class

class Item{
private $quantity=0;
private $name='';
private $description='';
private $price=0.0;

    
    public function Item($itemName, $itemDescription, $itemPrice) //class constructor
    {
        $this->name=$itemName;
        $this->description  = $itemDescription;
        $this->price = $itemPrice;
    
    }
    
}

?>
