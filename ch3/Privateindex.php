<?php
//complete code for index.php
$nav = "";
$info = "";
include_once "views/printnewquiznavigation.php";
include_once "classes/Private_Page_Data.class.php";
$pageData = new Page_Data();
$pageData->setTitle("Building and processing HTML forms with PHP");
$pageData->setContent($nav);
$pageData->appendContent("<div>...and a form here</div>");
$navigationIsClicked = isset($_GET['page']);
if ($navigationIsClicked ) {
    $fileToLoad = $_GET['page'];
} else {
    $fileToLoad = "search";
}
include_once "views/$fileToLoad.php";
$pageData->appendContent($info);
require "templates/privatepage.php";
echo $page;
?>
