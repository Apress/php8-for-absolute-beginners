<?php
// complete code for controllers/Database.php
if(isset($_POST['columns'])) {
	$database = $_POST['columns'];
	require_once "models/accessData.class.php";
	$dataObject =  new accessData();
		$type = "Table";
		$dropdown = $dataObject->returnDatabaseTables($database);
		require_once "views/dropdown-form-html.php";
	}
?>