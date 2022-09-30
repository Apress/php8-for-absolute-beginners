<?php
function valid_move($first_row, $first_column, $second_row, $second_column) {  
If (($checker_board[$first_row] [$first_column] ==   "white checker") &&   
	(checker_board[$second_row] [$second_column] ==  "black")){  
	  	  If(($second_row - $first_row == 1) &&   
			(($second_column - $first_column == 1) ||  
				($second_column - $first_column == -1))) {  
				$checker_board[$second_row][$second_column] = "white checker";  
				$checker_board[$first_row][$first_column] = "black";  
			}  
} else {  
	If ( ($checker_board[$first_row] [$first_column] ==  "red checker") &&  
	  	  ($checker_board[$second_row] [$second_column] ==  "black"))  
	{  
	  	If(($second_row - $first_row == -1) &&   (($second_column - $first_column == 1) ||  
			($second_column - $first_column == -1))) {  
				$checker_board[$second_row][$second_column] = "red checker";  
				$checker_board[$first_row][$first_column] = "black";  
		}  
	} // if both if statements fail it’s not a valid move  
  }  
display_board();  
}  
?>