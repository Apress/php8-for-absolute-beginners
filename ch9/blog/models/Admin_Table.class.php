<?php
//complete code for models/Admin_Table.class.php
//include parent class' definition
include_once "models/Table.class.php";
 
class Admin_Table extends Table {
 
    public function create( string $email, string $userid, string $password ) {
		$valid_email = filter_var($email, FILTER_VALIDATE_EMAIL);
		if (($this->validate_password($password)) and ($valid_email) and (strlen($userid) >= 8)) {
        //check if e-mail is available
			if ($this->checkAvailable( $email, $userid )) {
				//hash password with BCYRPT
			    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
				$sql = "INSERT INTO admin ( email, userid, password )
                VALUES( ?, ?, ? )";
				$data= array( $email, $userid, $hashedpassword );
				$this->executeSQL( $sql, $data );  }
			else { throw new Exception("E-mail and/or Userid already used."); }
		}
	    else { throw new Exception("Userid and/or Password not valid."); }
	}
   
    private function checkAvailable (string $email, string $userid) : bool {
        $sql = "SELECT email FROM admin WHERE email = ? OR userid = ?";
        $data = array( $email, $userid );
        $this->executeSQL( $sql, $data );
        $statement = $this->executeSQL( $sql, $data );
        //if a user with that e-mail is found in database
        if ( $statement->rowCount() >= 1 ) {
			return false;
		} else {
			return true;
        } 
    }
	private function validate_password(string $password) : bool {
		// Validate password strength
		$uppercase = preg_match('@[A-Z]@', $password);
		$lowercase = preg_match('@[a-z]@', $password);
		$number    = preg_match('@[0-9]@', $password);
		// Do not allow special characters
		$specialCharacters = !(preg_match('@[^\w]@', $password));
		$length = strlen($password);
        if ((strlen($length >=8)) and ($uppercase) and ($lowercase) and ($number) and ($specialCharacters)) { 
			return true; }
		else { 
		return false; }
	}
	
}
?>