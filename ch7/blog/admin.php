<?php
//complete code for blog/admin.php
include_once "models/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->setTitle("PHP/MySQL blog demo");
$pageData->setCss("<link rel='stylesheet' href='css/blog.css'>");
$pageData->setContent("<h1>YES!</h1>");
 
include_once "views/page.php";
echo $page;
?>
