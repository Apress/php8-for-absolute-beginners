<?php
//complete code for controllers/admin/sessionusers.php
//new code starts here
include_once "models/Admin_Table.class.php";
 
//is form submitted?
$createNewAdmin = isset( $_POST['new-admin'] );
//if it is...
if( $createNewAdmin ) {
    //grab form input
    $newEmail = $_POST['email'];
	$newUserid = $_POST['userid'];
    $newPassword = $_POST['password'];    
    $adminTable = new Admin_Table($db);
    try {
        //try to create a new admin user
        $adminTable->create( $newEmail, $newUserid, $newPassword );
        //tell user how it went
        $adminFormMessage = "New user created for $newEmail!";
    } catch ( Exception $e ) {
        //if operation failed, tell user what went wrong
        $adminFormMessage = $e->getMessage();
    }
}
//end of new code
include_once "views/admin/session-admin-form-html.php";
?>
