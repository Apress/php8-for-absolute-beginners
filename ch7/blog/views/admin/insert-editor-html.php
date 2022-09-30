<?php
//complete source code for views/admin/editor-html.php
$info = "
<form method='post' action='insertadminWithNavigation.php?page=newesteditor' id='editor'>
    <fieldset>
        <legend>New Entry Submission</legend>
        <label>Title</label>
        <input type='text' name='title' maxlength='150' />
         
        <label>Entry</label>
        <textarea name='entry'></textarea>
         
        <fieldset id='editor-buttons'>
            <input type='submit' name='action' value='save' />
            <input type='submit' name='action' value='delete' />
        </fieldset>
    </fieldset>
</form>
";
?>
