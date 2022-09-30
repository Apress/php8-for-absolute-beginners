<?php
//complete code for views/admin/session-entries-html.php
$entriesFound = isset( $entries );
if ( $entriesFound === false ) {
    trigger_error( 'views/session-entries-html.php needs $entries' );
}
 
//create a <ul> element
$info = "<h1>Blog Entries</h1>";
$info .= "<ul id='blog-entries'>";
$info .= "<ul>";
 
//loop through all $entries from the database
//remember each one row temporarily as $entry
//$entry will be a StdClass object with entry_id, title and intro
while ( $entry = $entries->fetchObject() ) {
    $href  = "sessionadmin.php?page=sessioneditor&amp;id=$entry->entry_id";
    //create an <li> for each of the entries
    $info .= "<li><a href='$href'>$entry->title</a></li>";
}
//end the <ul>
$info .= "</ul>";
?>

