<?php
//complete code for classes/Uploader.class.php
class ImageUploader {
    private $filename;
    private $fileData;
    private $destination;
 
    //declare a constructor method
    public function __construct( $key ) {
        $this->filename = $_FILES[$key]['name'];
        $this->fileData = $_FILES[$key]['tmp_name'];
    }
     
    public function saveIn( $folder ) {
        $this->destination = $folder;
    }
     
    public function save(){
        //no code here yet
    }
}
?>
