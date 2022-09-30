<?php
//complete code for models/Admin_User.class.php
 
class Admin_User {
 
    //declare a new method, a constructor
    public function __construct(){
        //start a session
        session_start();
    }


    //edit existing method
    public function isLoggedIn(){
        $sessionIsSet = isset( $_SESSION['logged_in'] );
        if ( $sessionIsSet ) {
            $out = $_SESSION['logged_in'];
        } else {
            $out = false;
        }
        return $out;
    }  
   
    //edit existing method
    public function login () {
        //set session variable ['logged_in'] to true
        $_SESSION['logged_in'] = true;
    }
     
    //edit existing method
    public function logout () {
        //set session variable ['logged_in'] to false
        $_SESSION['logged_in'] = false;
    }
 
}
?>
