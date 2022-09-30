<?php
//complete code for ch10/index.php
$info = "";
require_once __DIR__.'/simplexlsx-master/src/SimpleXLSX.php';
require_once "models/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->setTitle("PHP Dashboard demo");

$pageRequested =  isset( $_GET['page'] );
//default controller file_type
$controller = "file_type";
if ( $pageRequested ) {
	$controller = $_GET['page'];
}
include_once "controllers/$controller.php";
$pageData->setContent($info);
include_once "views/page.php";
echo $page;
?>




