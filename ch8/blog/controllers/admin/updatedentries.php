<?php
//complete code for controller/admin/entries.php
include_once "models/Newest_Blog_Entry_Table.class.php";
$entryTable = new Newest_Blog_Entry_Table( $db );
$entries = $entryTable->getAllEntries(); 
include_once "views/admin/updated-entries-html.php";
?>
