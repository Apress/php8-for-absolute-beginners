<?php
//complete code for index.php
include_once "views/navigation.php";
$pageData = new stdClass();
$pageData->title = "Thomas Blom Hansen: Portfolio site";
$pageData->content = $nav;
//changes begin here
$navigationIsClicked = isset($_GET['page']);
if ($navigationIsClicked ) {
    $fileToLoad = $_GET['page'];
    $pageData->content .= "<p>Will soon load $fileToLoad.php</p>";
}
//end of changes
require "templates/newerpage.php";
echo $page;
?>
