<?php
//complete code for views/searched-comment-form-html.php
 
$idIsFound = isset($entryId);
 
if( $idIsFound === false ) {
    trigger_error('views/searched-comments-html.php needs an $entryId');
}
 
$info .= "
<form action='searchedindex.php?page=searchedblog&amp;id=$entryId' method='post' id='comment-form'>
    <input type='hidden' name='entry-id' value='$entryId' />

	<label>Your name</label>
	<input type='text' name='user-name' maxlength='30' 
		pattern='[a-zA-Z]{1,30}'
        title='Name can contain only alphabetic letters, no special characters. Name is required.'
		 required />
    <label>Your Comment</label>
        <textarea name='new-comment'></textarea>
	
    <input type='submit' value='post!' />
</form>";
?>