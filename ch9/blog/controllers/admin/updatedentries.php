<?php
//complete code for controller/admin/updatedentries.php
include_once "models/Updated_Blog_Entry_Table.class.php";
$entryTable = new Blog_Entry_Table( $db );
$entries = $entryTable->getAllEntries(); 
include_once "views/admin/updated-entries-html.php";
?>
