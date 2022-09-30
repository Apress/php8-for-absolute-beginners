<?php
function start_game() {  
for ($I=0; $I < 8; $I++) {  
if( ($I % 2 == 0 )&& ($I != 4 )) {             
 for($J=1; $J < 8; $J = $J +2) {  
	$checker_board[$I][$j] = ($J == 6) ? "red checker" : "white checker";  
	         }  
	  }  
	  	else if(($I % 2 !=0) && ($I != 3)) {  
	  	     for($J=0; $J < 8; $J = $J + 2) {  
	  	  	  $checker_board[$I][$J] =  ($J == 1) ? "white checker" : "red checker";  
	                }  
	      }  
                    }  
                    display_board();  
}
?>  
