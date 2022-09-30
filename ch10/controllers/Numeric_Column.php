<?php
// complete code for controllers/Database.php
use Shuchkin\SimpleXLSX;
if((isset($_POST['table'])) and (isset($_POST['database']))and (isset($_POST['titles']))){
	// database
	$columns = $_POST['table'];
	$database = $_POST['database'];
	$title = $_POST['titles'];
	require_once "models/accessData.class.php";
	$dataObject =  new accessData();
		$type = "Column";
		$dropdown = $dataObject->returnDatabaseTitles($database, $columns, $title);
		require_once "views/dropdown-form-html.php";
	}
	else if((isset($_POST['filename'])) and (isset($_POST['all_Columns']))) {
		// Excel
		$file = $_POST['filename'];
		$numeric_Column = $_POST['all_Columns'];
		require_once "models/accessData.class.php";
		$dataObject =  new accessData();
		$type = "Column";
		$numeric_Info = explode(",", $numeric_Column);
		$dropdown = $dataObject->returnExcelTitles($file,$numeric_Info[0],$numeric_Info[1]);
		require_once "views/dropdown-form-html.php";
	}
	else if((isset($_POST['JSON_Filename'])) and (isset($_POST['columns']))) {
		// JSON
		$file = $_POST['JSON_Filename'];
		$numeric_Column = $_POST['columns'];
		require_once "models/accessData.class.php";
		$dataObject =  new accessData();
		$type = "Column";
		$numeric_Info = explode(",", $numeric_Column);
		$dropdown = $dataObject->returnJSONTitles($file,$numeric_Info[0],$numeric_Info[1]);
		require_once "views/dropdown-form-html.php";
	}
		else if((isset($_POST['CSV_Filename'])) and (isset($_POST['columns']))) {
		// CSV
		$file = $_POST['CSV_Filename'];
		$numeric_Column = $_POST['columns'];
		require_once "models/accessData.class.php";
		$dataObject =  new accessData();
		$type = "Column";
		$numeric_Info = explode(",", $numeric_Column);
		$dropdown = $dataObject->returnCSVTitles($file,$numeric_Info[0],$numeric_Info[1]);
		require_once "views/dropdown-form-html.php";
	}
?>