<?php
//functions


function generateItemRow(Item $tempItem)
{

echo '
<tr>
    <td>  '. $tempItem->name .'</td>
    <td>  '. $tempItem->description .'
    </td>
    <td>   $'.$tempItem->price.'
    </td>
    
    <td>  <form action = "' . $_SERVER['PHP_SELF'] .'"  method = "GET">     
    	<select name="'. $tempItem->name . 'Quantity">
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
    echo '
    
    
    ';
}
function calculateTotal($itemsOrdered)
{
	$total=0;

 
      
 
    
}
