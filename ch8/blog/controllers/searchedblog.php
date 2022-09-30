<?php
//complete code for controllers/searchedblog.php
include_once "models/Searched_Blog_Entry_Table.class.php";
$entryTable = new Searched_Blog_Entry_Table( $db );
$isEntryClicked = isset( $_GET['id'] );
if ($isEntryClicked ) {
    $entryId = $_GET['id'];
    //new code begins here
    $entryData = $entryTable->getEntry( $entryId );  
    include_once "views/entry-html.php";
	include_once "controllers/searchedcomments.php";
} else {
    $entries = $entryTable->getAllEntries();
    include_once "views/searched-entries-html.php";
}
?>