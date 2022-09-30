<?php
//complete code for views/searching-entries-html.php
$entriesFound = isset( $entries );
if ( $entriesFound === false ) {
    trigger_error( 'views/searching-entries-html.php needs $entries' );
}
 
//create a <ul> element
$info = "<h1>Blog Entries</h1>";
$info .= "<ul id='blog-entries'>";
 
//loop through all $entries from the database
//remember each one row temporarily as $entry
//$entry will be a StdClass object with entry_id, title and intro
while ( $entry = $entries->fetchObject() ) {
    $href  = "searchingindex.php?page=searchingblog&amp;id=$entry->entry_id";
    //create an <li> for each of the entries
    $info .= "<li>
        <h2>$entry->title</h2>
        <div>$entry->intro
            <p><a href='$href'>Read more</a></p>
        </div>
    </li>"; 
}
//end the <ul>
$info .= "</ul>";
?>