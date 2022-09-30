<?php
// complete code for controllers/fileType.php
if(isset($_POST['file_type'])) {
	$file_type = $_POST['file_type'];
	require_once "models/accessData.class.php";
	$dataObject =  new accessData();
	if($file_type == "Database") {
		$type = "Database";
		$dropdown = $dataObject->returnDatabases();
		require_once "views/dropdown-form-html.php";
	}
	else if($file_type == "Excel") {
		$type = "Excel";
		$file_type = ".xlsx";
		require_once "views/file-form-html.php";
	}
	else if($file_type == "JSON") {
		$type = "JSON";
		$file_type = ".json";
		require_once "views/file-form-html.php";
	}
	else if($file_type == "CSV") {
		$type = "CSV";
		$file_type = ".csv";
		require_once "views/file-form-html.php";
	}
}
?>