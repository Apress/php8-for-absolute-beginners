<?php
//complete code for index.php
$nav = "";
$info = "";
include_once "models/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->setTitle("PHP/MySQL site poll example");
$pageData->setContent("<h1>Everything works so far!</h1>");
$pageData->appendContent("<div>...and content goes here.</div>");
require "views/page.php";
echo $page;
?>

