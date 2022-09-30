<?php
//complete code for controller/admin/entries.php
include_once "models/New_Blog_Entry_Table.class.php";
$entryTable = new New_Blog_Entry_Table( $db );
$entries = $entryTable->getAllEntries(); 
include_once "views/admin/new-entries-html.php";
?>
