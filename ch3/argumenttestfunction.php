<?php
function getParagraph( ?string $content ): string{
    return "<p>$content</p>";
}
$output = getParagraph( "I want this text in my first paragraph" );
$output .= "<h1>Just some heading</h1>";
$output .= getParagraph("...and this in my last paragraph." );
echo $output;
echo getParagraph("But I want to finish it with this paragraph");
?>