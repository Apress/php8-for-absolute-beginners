<?php
// complete code for controllers/Excel.php
use Shuchkin\SimpleXLSX;
if(isset($_FILES['filename']['name'])){
	$file =$_FILES['filename']['name'];
	require_once "models/accessData.class.php";
	$dataObject =  new accessData();
		$type = "Numeric_Column";
		$dropdown = $dataObject->returnExcelTitles($file,'','', true);
		require_once "views/dropdown-form-html.php";
	}
?>