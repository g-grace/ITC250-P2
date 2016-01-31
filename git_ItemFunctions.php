<?php
//functions


function generateItemRow(Item $tempItem)
{

echo '
<tr>
    <td>Item Name: $tempItem->name
    </td>
    <td>Item Price:
    </td>
    <td>Item Description: $tempItem->description
    </td>
    <td> Select quantity: <form action = "<?php echo $_SERVER[’PHP_SELF’]; ?>"  method = "GET">        Degrees:  <input type = "text" name = "degree" size=8>
    	<select name= $tempItem->name . "quantity">
        	<option value="0">0</option>
        	<option value="1">1</option>
        	<option value="2">2</option>
        	<option value="3">3</option>
        	<option value="4">4</option>
        	<option value="5">5</option>
        	<option value="6">6</option>
        	<option value="7">7</option>
        	<option value="8">8</option>
        	<option value="9">9</option>
        	</select> 
    	<br/>
    </td>
</tr>
';
}   

function createLineItem()
{
    
}
function calculateTotal($itemsOrdered)
{
	$total=0;

 
      echo 'You ordered ' . $quantity  . ' ' . $item->name;
 
    
}
