<?php
//complete source code for controllers/admin/updatededitor.php
include_once "models/Newest_Blog_Entry_Table.class.php";
$entryTable = new Newest_Blog_Entry_Table( $db );
//was editor form submitted?
$editorSubmitted = isset( $_POST['action'] );
if ( $editorSubmitted ) {  
    $buttonClicked = $_POST['action'];
    $id = clean_input($_POST['id']);
	$title = clean_input($_POST['title']);
    $entry = clean_input($_POST['entry']);
    if ( ($buttonClicked === 'save') and ($id === '0' ) ) {
        $entryTable->saveEntry( $title, $entry );
    } else if  (($buttonClicked === 'save') and ($id != '0')) {
		$entryTable->updateEntry( $id, $title, $entry );
	} else if ($buttonClicked === 'delete' ) {
		$entryTable->deleteEntry( $id );
	}
}
$entryRequested = isset( $_GET['id'] );
//create a new if-statement
if ( $entryRequested ) {
    $id = $_GET['id'];
    //load model of existing entry
    $entryData = $entryTable->getEntry( $id );
    $entryData->entry_id = $id;
} 
include_once "views/admin/updated-editor-html.php";
//New function to remove invalid code
function clean_input($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = strip_tags($value);
  return $value;
}
?>


 

