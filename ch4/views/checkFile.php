<?php
function checkFile($tmpName, $variableName) {

$valid_File_Types =  array('image/jpeg' => 'jpg');

$max_Size  = 40 * 1024 * 1024; 
//  40MB must be the same size or less than the setting in php.ini

$errorStatus = false;

if(!isset($_FILES[$variableName]) ) {
   // error $_FILE does not exist
   $errorStatus = true;
} else {
    $info = finfo_open(FILEINFO_MIME_TYPE);
    if (!$info) {
        // error Can’t open finfo using mime type
        $errorStatus = true;
    } else {
    	 $mime_type = finfo_file($info, $tmpName);
         if (!in_array($mime_type, array_keys($valid_File_Types))) {
          // error invalid file type
          $errorStatus = true;
        } else {
			if (filesize($_FILES[$variableName]['tmp_name']) > $max_Size) {
              // error file size too big
              $errorStatus = true;
           }
		   finfo_close($info);
		}
}
}
return $errorStatus;
}
$variableName ='image-data';
$tmp = $_FILES['image-data']['tmp_name'];
if ( !checkFile($tmp, $variableName)) 
{ echo "File is valid";}
else { echo "Invalid File"; }
?>