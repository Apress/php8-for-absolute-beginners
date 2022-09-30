<?php
function valid_jump($first_row, $first_column,  $second_row, $second_column) {  
if (($checker_board[$first_row] [$first_column] != "red checker") &&   
(checker_board[$second_row] [$second_column] ==  "black")){  
	  	if($second_row - $first_row == 2) {  
			if($second_column - $first_column == 2) {  
	  		// right side jump attempted  
				if((($checker_board[$first_row + 1][$first_column + 1] !=  
					"black") && // not jumping empty space  
				(substr(
				$checker_board[$first_row +1] [$first_column + 1],0,3) !=  
				substr(
				$checker_board[$first_row] [$first_column],0,3))))   
				// not jumping its own color  
				{  
					if((second_row == 7) &&   
					($checker_board[$first_row] [$first_column] ==  
					"white checker"))  {  
						$checker_board[$second_row][$second_column] = 
						"white king"; 
		            } else {  
						$checker_board[$second_row][$second_column] =   
						$checker_board[$first_row][$first_column];                                                                     }  
						$checker_board[$first_row][$first_column] = 
						"black";  
						$checker_board[$first_row + 1][$first_column + 1] = 
						"black"; 
					}
						} // end not jump own checker and not jump empty  
				} // end right side jump attempted  

		else {
			if  ($second_column - $first_column == -2) {  
				// left side jump attempted  
	           if((($checker_board[$first_row+1][$first_column-1] !=  
					"black") && 
               // not jumping empty space  
				(substr(
					$checker_board[$first_row+1][$first_column-1],0,3) !=  
				 substr(
					$checker_board[$first_row][$first_column],0,3))))   
					// not jumping its own color  
				{  
					if((second_row == 7) &&   
						($checker_board[$first_row][$first_column] ==   
						"white checker"))  {  
	  	                 $checker_board[$second_row][$second_column] =   
							"white king"; 
                    } else {  
						$checker_board[$second_row][$second_column] =  
						$checker_board[$first_row][$first_column]; 
					}  
					$checker_board[$first_row] [$first_column]= "black";  
					$checker_board[$first_row + 1][$first_column - 1] = "black";  
				} // end not jump own checker and not jump empty  
               } // end left side jump attempted  
		} // end jumped two rows  
	} // end not red and empty place to jump  
	else {  
		if (($checker_board[$first_row] [$first_column] != "white checker") &&   
			(checker_board[$second_row] [$second_column] ==  "black")){  
	        if($second_row - $first_row == -2) {  
				if($second_column - $first_column == 2) {  
	  	         // right side jump attempted  
					if((($checker_board[$first_row-1] [$first_column+1] !=  
	  	               "black") && // not jumping empty space  
						(substr(
						$checker_board[$first_row-1] [$first_column+1],0,3) !=  
						Substr(
						$checker_board[$first_row] [$first_column],0,3))))   
					// not jumping its own color  
					{  
						if((second_row == 0) &&  
							($checker_board[$first_row] [$first_column] ==   
								"red checker"))  {  
	  		                   $checker_board[$second_row] [$second_column] =   
								"red king"; 
                        } else {  
							$checker_board[$second_row] [$second_column] =   
								$checker_board[$first_row] [$first_column];                                                    }  
							$checker_board[$first_row] [$first_column] = "black";  
							$checker_board[$first_row-1] [$first_column+1] = 
							"black";  
						} // end not jump own checker and not jump empty  
					} // end right side jump attempted else 
				}
				if  ($second_column - $first_column == -2) {  
				// left side jump attempted  
	                 if((($checker_board[$first_row-1] [$first_column-1] !=  
					 "black") &&
                     // not jumping empty space  
						(substr(
							$checker_board[$first_row-1] [$first_column-1],0,3) !=  
						Substr(
							$checker_board[$first_row] [$first_column],0,3))))   
							// not jumping its own color  
					{  
						if((second_row == 0) &&   
							($checker_board[$first_row]  [$first_column] ==  
							"white checker"))  {  
							$checker_board[$second_row] [$second_column] =   
								"white king"; 
                        } else {  
							$checker_board[$second_row] [$second_column] =   
							$checker_board[$first_row] [$first_column]; }  
							$checker_board[$first_row] [$first_column] = "black";  
							$checker_board[$first_row-1] [$first_column-1] = 
							"black";  
						} // end not jump own checker and not jump empty  
                } // end left side jump attempted  
			} // end jumped two rows  
		} // end not white and empty place to jump  
}
?>