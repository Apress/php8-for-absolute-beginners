<?php
//complete source code for views/admin/editor-html.php
 
//new code added here
//check if required data is available
$entryDataFound = isset( $entryData );
if( $entryDataFound === false ){
    //default values for an empty editor
    $entryData = new StdClass();
    $entryData->entry_id = 0;
    $entryData->title = "";
    $entryData->entry_text = "";
}
$info .= "
<form method='post' action='admin.php?page=editor' id='editor'>
    <input type='hidden' name='id' value='$entryData->entry_id' />
    <fieldset>
        <legend>New Entry Submission</legend>
        <label>Title</label>
        <input type='text' name='title' maxlength='150' ";
if ( $entryData->title !="") {
		$info .= "value='$entryData->title' ";
}
		$info .= "pattern='[A-Za-z]{,150}'
        title='Title can contain only alphabetic letters, no special characters. Title is required.'
	    required />
        <label>Entry</label>
        <textarea name='entry'>$entryData->entry_text</textarea>
         
        <fieldset id='editor-buttons'>
            <input type='submit' name='action' value='save' />
            <input type='submit' name='action' value='delete' />
        </fieldset>
    </fieldset>
</form>
";
?>

   


