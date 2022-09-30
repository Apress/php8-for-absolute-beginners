<?php
function display_board() { 

    foreach( $checker_board as $position) {   

switch ($position) {  
	  	  case "red" :  
	  	       // display a red square or image  
	                             break;  

	  	     case "black":  	  
	  	       // display a black square or image  
	                            break;  

	                              default:  
	  	      print "Error displaying board";  
	                          break;  
     }  
}
} 
?>