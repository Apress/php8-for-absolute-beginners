<?php
//complete code for index.php
include_once "views/navigation.php";
$pageData = new stdClass();
$pageData->title = "Thomas Blom Hansen: Portfolio site";
$pageData->content = $nav;
require "templates/newerpage.php";
echo $page;
?>

