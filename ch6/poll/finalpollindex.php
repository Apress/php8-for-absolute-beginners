<?php
//complete code for index.php
$nav = "";
$info = "";
include_once "models/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->setTitle("PHP/MySQL site poll example");
include_once "models/database.php";
include_once "controllers/finalpoll.php";
$pageData->setContent($info);
require "views/page.php";
echo $page;
?>
