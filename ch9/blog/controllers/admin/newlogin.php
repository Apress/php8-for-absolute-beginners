<?php
//complete code for controllers/admin/newlogin.php
 
$loginFormSubmitted = isset( $_POST['log-in'] );
if( $loginFormSubmitted ) {
    $admin->login();
}

$loggingOut = isset ( $_POST['logout'] );
if ( $loggingOut ){
    $admin->logout();
}
 
if ( $admin->isLoggedIn() ) {
    include_once "views/admin/logout-form-html.php";
} else {
    include_once "views/admin/login-form-html.php";
}
?>