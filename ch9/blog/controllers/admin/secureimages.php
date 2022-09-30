<?php
//complete source code for controllers/admin/secureimages.php
function upload(){
    include_once "models/Uploader.class.php";
     
    //image-data is the name attribute used in <input type='file' />
    $uploader = new ImagesUploader( "image-data" );
    $uploader->saveIn("imgs");
    $fileUploaded = $uploader->save();
    if ( $fileUploaded ) {
        $out = "<h1>New image uploaded</h1>";
    } else {
        $out = "<h1>Something went wrong file not uploaded to imgs folder</h1>";
    } 
    return $out;
}
$imageSubmitted = isset( $_POST['new-image'] );
//if the upload form was submitted
if ( $imageSubmitted ) {
$info = upload();
}
else {
include_once "views/admin/secure-images-html.php";
}
?>


