<?php
//complete code for controllers/blog.php
include_once "models/New_Blog_Entry_Table.class.php";
$entryTable = new New_Blog_Entry_Table( $db );
$entries = $entryTable->getAllEntries();
//load the view
include_once "views/list-entries-html.php";
?>
