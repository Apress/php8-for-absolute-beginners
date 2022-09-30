<?php
//complete code for views/admin/images-html.php
if ( isset( $uploadMessage ) === false ){
    $uploadMessage = "Upload a new image";
}
 
$info = "<h1>Image Upload</h1>
<form method='post' action='admin.php?page=images'  
      enctype='multipart/form-data'>
    <p>$uploadMessage</p>
    <input type='file' name='image-data' accept='image/jpeg' />
    <input type='submit' name='new-image' value='upload' />
</form>
";
?>