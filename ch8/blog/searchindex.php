<?php
//complete code for blog/index.php
$info = "";
include_once "models/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->setTitle("PHP/MySQL blog demo");
include_once "models/database.php";
include_once "controllers/searchblog.php";
//new code: include the search view before the blog controller
include_once "views/search-form-html.php";
//end of new code
$pageData->setContent($info);
include_once "views/page.php";
echo $page;
?>



