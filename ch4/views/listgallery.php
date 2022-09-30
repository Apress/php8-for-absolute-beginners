<?php
//complete source code for views/gallery.php
//edit existing function
function showImages() : string{  
    $out = "<h1>Images Gallery</h1>";
    $out .= "<ul id='images'>";
   
	$dir_name = "imgs";
	chdir($dir_name);
    $images = glob("*.jpg");
	
	
	foreach($images as $image) {
	$out .= '<li><img src="'.$dir_name. '/' .$image.'" /></li>';
	}
	$out .= "</ul>";
	return $out;
}
$info = showImages();
	
?>
