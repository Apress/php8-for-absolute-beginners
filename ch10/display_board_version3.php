<?php
function display_board() {  
		foreach( $checker_board as $position) {  
		switch ($position) {  
	  	  	  case "red" :  
	  	  	     // display a red square or image  
	  	  	  break;  

	  	  	  case "black" :    
	  	  	     // display a black square or image  
	  	  	  break;  

			  case "white checker" :  
	  	  	     // display a white square or checker image  
	  	  	  break;  

	  	  	  case "red checker" :  
	  	  	     // display a redish square or a checker image  
	  	  	  break;  

	  	  	  case "white king" :  
	  	  	     // display a king color square king checker image  
	  	  	  break;  

	  	  	  case "red king" :  
	  	  	     // display a king color square king checker image  
	  	  	  break;  

	  	  	  default:  
	  	  	     print "Error displaying board";  
	  	  	  break;  
	  	}  
}
}  
?>