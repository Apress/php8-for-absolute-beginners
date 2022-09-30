<?php
//complete code for blog/index.php
$info = "";
include_once "models/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->setTitle("PHP/MySQL blog demo");
include_once "models/database.php";
include_once "controllers/blog.php";
$pageData->setContent($info);
include_once "views/page.php";
echo $page;
?>



