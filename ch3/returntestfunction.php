<?php
function getParagraph(){
    return "<p>This paragraph came from a function</p>";
}
$output = getParagraph();
$output .= "<h1>Just some heading</h1>";
$output .= getParagraph();
echo $output;
echo getParagraph();
?>