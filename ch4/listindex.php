<?php
//complete code for index.php
$nav = "";
$info = "";
include_once "views/listnavigation.php";
include_once "classes/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->setTitle("Dynamic image gallery");
$pageData->setContent($nav);
$navigationIsClicked = isset($_GET['page']);
if ( $navigationIsClicked ) {
    $fileToLoad = $_GET['page'];
} else {
    $fileToLoad = "listgallery";
}
include_once "views/$fileToLoad.php";
$pageData->appendContent($info);
require "templates/page.php";
echo $page;
?>

