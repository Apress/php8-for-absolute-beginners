<?php
//complete source code for controllers/admin/editor.php
include_once "models/New_Blog_Entry_Table.class.php";
$entryTable = new New_Blog_Entry_Table( $db );
//was editor form submitted?
$editorSubmitted = isset( $_POST['action'] );
if ( $editorSubmitted ) {  
    $buttonClicked = $_POST['action'];
    $id = $_POST['id'];
    if ( $buttonClicked === 'save' ) {
        //get title and entry data from editor form
        $title = $_POST['title'];
        $entry = $_POST['entry'];
        //save the new entry
        $entryTable->saveEntry( $title, $entry );
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
include_once "views/admin/newest-editor-html.php";
?>
