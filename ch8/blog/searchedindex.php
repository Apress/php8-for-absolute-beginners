<?php
//complete code for blog/searchedindex.php
$info = "";
include_once "models/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->setTitle("PHP/MySQL blog demo");
include_once "models/database.php";

$pageRequested =  isset( $_GET['page'] );
//default controller is searchedblog
$controller = "searchedblog";
if ( $pageRequested ) {
    //if user submitted the search form
    if ( $_GET['page'] === "search" ) {
        //load the search by overwriting default controller
        $controller = "searched";
    } 
}
include_once "controllers/$controller.php";
include_once "views/searched-form-html.php";
$pageData->setContent($info);
include_once "views/page.php";
echo $page;
?>




