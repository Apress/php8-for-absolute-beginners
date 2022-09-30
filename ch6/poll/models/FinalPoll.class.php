<?php
//complete code for models/Poll.class.php
class Poll {
	private $db;
    //method requires a database connection as argument
    public function __construct( $dbConnection ){
        //store the received conection in the $this->db property
        $this->db = $dbConnection;
    }
    public function getPollData() {
    $sql = "SELECT poll_question, yes, no FROM poll WHERE poll_id = 1";
    $statement = $this->db->prepare($sql);
    $statement->execute();
    $pollData = $statement->fetchObject();
    return $pollData;
    }
	public function updatePoll ( $input ) {   
    if ( $input === "yes" ) {
        $updateSQL = "UPDATE poll SET yes = yes+1 WHERE poll_id = 1";
    } else if ( $input === "no" ) {
        $updateSQL = "UPDATE poll SET no = no+1 WHERE poll_id = 1";
    }   
    $updateStatement = $this->db->prepare($updateSQL);
    $updateStatement->execute();
}
}
?>



