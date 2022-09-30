<?php
//complete source code for views/showgallery.php
//function defintion
function showImages() : string{
    $out = "<h1>Image Gallery</h1>";
    $out .= "<ul id='images'>";
    $out .= "<li>I will soon list all images</li>";  
    $out .= "</ul>";
    return $out;
}
//function call
$info = showImages();
?>
