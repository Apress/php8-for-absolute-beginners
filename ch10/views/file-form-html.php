<?php
//complete code for views/admin/file-form-html.php

$idIsFound = isset($type);
$FTIsFound = isset($file_type);

if( $idIsFound === false ) {
    trigger_error('views/file-form-html.php needs an $type');
}
if( $FTIsFound === false ) {
    trigger_error('views/dropdown-html.php needs an $file_type');
}
 
$info .= "<h1>Select $type Data File<h1>
<form method='post' action='index.php?page=$type'  
      enctype='multipart/form-data'>
    <input type='file' name='filename' id='filename' accept='$file_type' />
    <input type='submit' name='submit' id='submit' value='upload' />
</form>
";
?>