<?php
//complete source code for controllers/admin/editor.php
//include class definition and create an object
include_once "models/Blog_Entry_Table.class.php";
$entryTable = new Blog_Entry_Table( $db );
//was editor form submitted?
$editorSubmitted = isset( $_POST['action'] );
if ( $editorSubmitted ) {  
    $buttonClicked = $_POST['action'];
      
    if ( $buttonClicked === 'save' ) {
        //get title and entry data from editor form
        $title = $_POST['title'];
        $entry = $_POST['entry'];
        //save the new entry
        $entryTable->saveEntry( $title, $entry );
    } 
}
include_once "views/admin/insert-editor-html.php";
?>

