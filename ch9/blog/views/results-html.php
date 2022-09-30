<?php
//complete code for views/results-html.php
$searchDataFound = isset( $searchData );
if( $searchDataFound === false ){
    trigger_error('views/results-html.php needs $searchData');
}
 
$HTML = "<section id='search'> <h1>
    You searched for <em>$searchTerm</em></h1><ul>";
 
while ( $searchRow = $searchData->fetchObject() ){
    $href = "index.php?page=blog&amp;id=$searchRow->entry_id";
    $HTML .= "<li><a href='$href'>$searchRow->title</a></li>";
}
$HTML .= "</ul></section>";
$info .= $HTML;
?>