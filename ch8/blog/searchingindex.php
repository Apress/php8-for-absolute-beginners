<?php
//complete code for blog/searchingindex.php
$info = "";
include_once "models/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->setTitle("PHP/MySQL blog demo");
include_once "models/database.php";

$pageRequested =  isset( $_GET['page'] );
//default controller is searchingblog
$controller = "searchingblog";
if ( $pageRequested ) {
    //if user submitted the search form
    if ( $_GET['page'] === "search" ) {
        //load the search by overwriting default controller
        $controller = "search";
    } 
}
include_once "controllers/$controller.php";
include_once "views/searching-form-html.php";
$pageData->setContent($info);
include_once "views/page.php";
echo $page;
?>




