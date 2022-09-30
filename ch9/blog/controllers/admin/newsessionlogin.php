<?php
//complete code for controllers/admin/newsessionlogin.php
 
$loginFormSubmitted = isset( $_POST['log-in'] );
if( $loginFormSubmitted ) {
    $admin->login();
}

$loggingOut = isset ( $_POST['logout'] );
if ( $loggingOut ){
    $admin->logout();
}
 
if ( $admin->isLoggedIn() ) {
    include_once "views/admin/new-session-logout-form-html.php";
} else {
    include_once "views/admin/new-session-login-form-html.php";
}
?>