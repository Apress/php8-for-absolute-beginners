<?php
//complete code for views/admin/source-html.php
if ( isset( $uploadMessage ) === false ){
    $uploadMessage = "Select a source for the data.";
}
 
$info .= "<h1>Select Source</h1>
<form method='post' action='index.php?page=source'  
      enctype='multipart/form-data'>
    <p>$uploadMessage</p>
    <input type='file' name='source-data' accept='image/jpeg' />
    <input type='submit' name='new-image' value='upload' />
</form>
";
?>