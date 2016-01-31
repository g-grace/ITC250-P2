    <?php
    //item order page
    include 'git_ItemClass.php';
    include 'git_ItemFunctions.php';

    $menuItems[]=new Item("Tacos", 2.50, "Two Tacos made with your choice of meat. lettuce and guacamole");
    $menuItems[]=new Item("Burrito", 4.50, "Your choice of meat, rice, beans, tomato and grilled onions wrapped in a tortilla skin");
    $menuItems[]=new Item("Chimichanga", 4.75, "Deep Fried Burrito Goodness!");
    $menuItems[]=new Item("Quesadilla", 3.50, "Cheese and choice of meat, grilled to perfection");
    $menuItems[]=new Item("Horchata", 2.00, "Wash it down with our delicious, authentic Horchata");
    $menuItems[]=new Item("Sodas", 1.50, "Take your pick of our Mexican sodas!");
    $menuItems[]=new Item("Churros", 1.50, "Fried dough sprinkled with cinnamon and sugar.");
    ?>
	<html>
	<?php
        $srv = $_SERVER['PHP_SELF'];
        if (!isset($_POST['orderedItems'])) //if nothing is ordered, print the menu
        { 
            echo '
            <form action = "' . $srv . '"  method = "POST"> 

                <table>';
                
                    foreach($menuItems as $tempItem) //while the array has items left in it
                    {
                        createLineItem($tempItem); //call create row function and pass in individual item
                    }
               
				echo '
	        	<input type = "submit" name = "order" value ="Submit Order"> 
	   	       	</table>
    	    	</form>   ';
		 }//if statement to generate menu + order form


		else if(isset($_POST['orderedItems']))//items ordered, display summary and price
        {
			foreach ($_POST['orderedItems'] as $tempItem)
            {   
				$tempQuantity = $tempItem->name . "quantity";
				$tempItem->quantity = $_POST[$tempQuantity];
            }
  
                        //save item quantities each item in array before calling calculate total function
                        //while items exists in ordered items, if item name equals
         CalculateTotal($_POST['orderedItems']);
                   
           }
 


      
