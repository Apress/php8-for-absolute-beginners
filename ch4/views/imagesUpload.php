<?php
//complete source code for views/upload.php
function upload(){
    include_once "classes/ImagesUploader.class.php";
     
    //image-data is the name attribute used in <input type='file' />
    $uploader = new ImagesUploader( "image-data" );
    $uploader->saveIn("imgs");
    $fileUploaded = $uploader->save();
    if ( $fileUploaded ) {
        $out = "New file uploaded to Images Gallery";
    } else {
        $out = "Something went wrong file not uploaded to Images Gallery";
    } 
    return $out;
}
$info = upload();
?>
