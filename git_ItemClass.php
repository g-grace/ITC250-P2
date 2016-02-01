<?php
//item class

class Item{
public $quantity=0;
public $name='';
public $description='';
public $price=0.0;

    
    public function Item($itemName, $itemPrice, $itemDescription) //class constructor
    {
        $this->name=$itemName;
        $this->description  = $itemDescription;
        $this->price = $itemPrice;
    
    }
    
}

?>
