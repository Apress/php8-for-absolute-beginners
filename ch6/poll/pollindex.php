<?php
//complete code for index.php
$nav = "";
$info = "";
include_once "models/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->setTitle("PHP/MySQL site poll example");
include_once "controllers/poll.php";
$pageData->setContent($info);
$pageData->appendContent("<div>...and content goes here.</div>");
require "views/page.php";
echo $page;
?>
