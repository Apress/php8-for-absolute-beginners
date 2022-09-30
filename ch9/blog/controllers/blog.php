<?php
//complete code for controllers/blog.php
include_once "models/Updated_Blog_Entry_Table.class.php";
$entryTable = new Blog_Entry_Table( $db );
$isEntryClicked = isset( $_GET['id'] );
if ($isEntryClicked ) {
    $entryId = $_GET['id'];
    //new code begins here
    $entryData = $entryTable->getEntry( $entryId );  
    include_once "views/entry-html.php";
	include_once "controllers/comments.php";
} else {
    $entries = $entryTable->getAllEntries();
    include_once "views/entries-html.php";
}
?>