<?php
// complete code for controllers/Database.php
if((isset($_POST['columns'])) and (isset($_POST['database']))){
	$columns = $_POST['columns'];
	$database = $_POST['database'];
	require_once "models/accessData.class.php";
	$dataObject =  new accessData();
		$type = "Numeric_Column";
		$dropdown = $dataObject->returnDatabaseTitles($database, $columns,'',true);
		require_once "views/dropdown-form-html.php";
	}
?>