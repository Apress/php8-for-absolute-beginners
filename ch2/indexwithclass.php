<?php
//complete code for index.php
$nav = "";
$info = "";
include_once "views/classnavigation.php";
include_once "classes/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->title = "Thomas Blom Hansen: Portfolio site";
$pageData->css = "<link href='css/layout.css' rel='stylesheet' />";
$pageData->content = $nav;
$navigationIsClicked = isset($_GET['page']);
if ($navigationIsClicked ) {
    $fileToLoad = $_GET['page'];
} else {
    $fileToLoad = "skills";
}
include_once "views/$fileToLoad.php";
$pageData->content .= $info;
require "templates/pagewithcss.php";
echo $page;
?>
