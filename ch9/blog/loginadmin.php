<?php
//complete code for blog/loginadmin.php
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
//load the login controller, which will show the login form
include_once "controllers/admin/login.php";
$pageData->setContent($info);
//add a new if statement
//show admin module only if user is logged in
if( $admin->isLoggedIn() ) {
    include "views/admin/login-admin-navigation.php";
	$pageData->setContent($nav);
    $navigationIsClicked = isset( $_GET['page'] );
    if ($navigationIsClicked ) {
        $controller = $_GET['page'];
    } else {
        $controller = "loginentries";
    }
    include_once "controllers/admin/$controller.php";    
    $pageData->appendContent($info);
} //end if-statement

include_once "views/page.php";
echo $page;
?>


