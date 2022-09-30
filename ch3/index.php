<?php
//complete code for index.php
include_once "classes/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->title = "Building and processing HTML forms with PHP";;
$pageData->content = "<nav>will soon show a navigation...</nav>";
$pageData->content .= "<div>...and a form here</div>";
require "templates/pagewithcss.php";
echo $page;
?>
