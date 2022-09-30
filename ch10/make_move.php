<?php
$first_click = false;   
$first_row = -1; $first_column = -1; $second_row = -1; 
$second_column= -1; 
function make_move($row,$column) {  
	If ($first_click == false) { // first click  
	  	$first_click = true;  
	  	$first_row = $row;  
	  	$first_column = $column;  
	}  
	else { // second move because $first_click is true  
	    $first_click = false; // clears flag even if move is not valid to allow user to try again  
	  	$second_row = $row;  
  	    $second_column = $column;   	
		valid_move($first_row, $first_column, $second_row, $second_column);  
	}  
}  
?>