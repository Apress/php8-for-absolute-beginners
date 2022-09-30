<?php
//complete code for blog/admin.php
$nav = "";
$info = "";
include_once 'views/admin/another-admin-navigation.php';
include_once "models/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->setTitle("PHP/MySQL blog demo");
$pageData->setCss("<link rel='stylesheet' href='css/blog.css'>");
$pageData->setContent($nav);
//new code begins here
$navigationIsClicked = isset( $_GET['page'] );
if ( $navigationIsClicked ) {
    //prepare to load corresponding controller
    $contrl = $_GET['page'];
} else {
    //prepare to load default controller
    $contrl = "anotherentries";
}
//load the controller
include_once "models/database.php";
include_once "controllers/admin/$contrl.php";
$pageData->appendContent($info);
include_once "views/page.php";
echo $page;
?>



