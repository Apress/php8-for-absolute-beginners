<?php
//complete code for index.php
$nav = " ";
$info = " ";
include_once "views/securenavigation.php";
$pageData = new stdClass();
$pageData->title = "Thomas Blom Hansen: Portfolio site";
$pageData->content = $nav;
//changes begin here
$navigationIsClicked = isset($_GET['page']);
if ($navigationIsClicked ) {
    $fileToLoad = $_GET['page'];
} else {
    $fileToLoad = "skills";
}
include_once "views/$fileToLoad.php";
$pageData->content .= $info;
//end of changes
require "templates/newerpage.php";
echo $page;
?>
