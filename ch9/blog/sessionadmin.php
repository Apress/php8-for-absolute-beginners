<?php
//complete code for blog/sessionadmin.php
$nav = "";
$info = "";
//include_once 'views/admin/valid-admin-navigation.php';
include_once "models/Page_Data.class.php";
$pageData = new Page_Data();
$pageData->setTitle("PHP/MySQL blog demo");
$pageData->setCss("<link rel='stylesheet' href='css/blog.css'>");

include_once "models/updateddatabase.php";

include_once "models/Admin_User.class.php";

$admin = new Admin_User();
//add a new if statement
//show admin module only if user is logged in
if( $admin->isLoggedIn() ) {
    include "views/admin/session-admin-navigation.php";
	$pageData->setContent($nav);
    $navigationIsClicked = isset( $_GET['page'] );
    if ($navigationIsClicked ) {
        $controller = $_GET['page'];
    } else {
        $controller = "sessionentries";
    }
    include_once "controllers/admin/$controller.php";    
    $pageData->appendContent($info);
} else { 
		include_once "controllers/admin/sessionlogin.php";
		$pageData->setContent($info);
		$admin->login(); } //end if-statement

include_once "views/page.php";
echo $page;
?>


