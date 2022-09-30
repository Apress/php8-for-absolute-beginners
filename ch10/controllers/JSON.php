<?php
// complete code for controllers/JSON.php
if(isset($_FILES['filename']['name'])){
	$file =$_FILES['filename']['name'];
	require_once "models/accessData.class.php";
	$dataObject =  new accessData();
		$type = "Numeric_Column";
		$dropdown = $dataObject->returnJSONTitles($file,'','', true);
		require_once "views/dropdown-form-html.php";
	}
?>