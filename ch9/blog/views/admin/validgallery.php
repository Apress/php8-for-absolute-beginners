<?php
//complete source code for views/validgallery.php
//edit existing function
function showImages() : string{  
    $out = "<h1>Images Gallery</h1>";
    $out .= "<ul id='images' 
	style='
	list-style-type:none;
    width: 550px;
	border: 5px solid black;
	padding: 5px;
	margin: 20px;'
	><li><p>";
    $totalSize = 0;
	$numberOfImages = 0;
	$dir_name = "imgs";
	chdir($dir_name);
    $images = glob("*.jpg");
	
	foreach($images as $image) {
		if((filesize($image) < 500000) and ($totalSize < 2500000)) {
	$out .= '<img src="'.$dir_name. '/' .$image.'" alt="'.$image.'" title="'.$image.'"
	 style="
	height: 200px; 
	width: 250px;
	border: 2px solid black;
	padding: 5px;
	margin: 5px;
	"/>';
	$totalSize += filesize($image);
	$numberOfImages++;
		}
		if (($numberOfImages % 2) == 0) {
			$out .= "</li><li>";
		}
	}
	$out .= "</li></ul>";
	return $out;
}
$info = showImages();
	
?>
