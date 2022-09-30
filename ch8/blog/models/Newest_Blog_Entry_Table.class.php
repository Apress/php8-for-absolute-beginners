<?php
//complete code listing for models/Newest_Blog_Entry_Table.class.php
 
class Newest_Blog_Entry_Table {
 
    private $db;
    //notice there are two underscore characters in __construct
    public function __construct ( $db ) {
        $this->db = $db;
    }
	private function executeSQL ( $sql, $data = NULL) {
    //create a PDOStatement object
    $statement = $this->db->prepare( $sql );
    try{
        //use the dynamic data and run the query
        $statement->execute( $data );
    } catch (Exception $e) {
        $exceptionMessage = "<p>You tried to run this sql: $sql <p>
                <p>Exception: $e</p>";
        trigger_error($exceptionMessage);
    }
    //return the PDOStatement object
    return $statement;
}

	public function getEntry( $id ){
    $sql = "SELECT entry_id, title, entry_text, date_created
            FROM blog_entry
            WHERE entry_id = ?"; 
    $data = array($id);
    //call the new DRY method
    $statement = $this->executeSQL($sql, $data);
    $model = $statement->fetchObject();
    return $model;
}

	public function getAllEntries () {
    $sql = "SELECT entry_id, title, SUBSTRING(entry_text, 1, 150) AS intro  FROM blog_entry";
    $statement = $this->executeSQL($sql);
    return $statement;
} 
	public function saveEntry ( $title, $entry ) {
    $entrySQL = "INSERT INTO blog_entry ( title, entry_text ) 
                 VALUES ( ?, ?)";
    $formData = array($title, $entry);
    $entryStatement = $this->executeSQL( $entrySQL, $formData );
}
	public function updateEntry ( $id, $title, $entry) {
    $sql = "UPDATE blog_entry 
            SET title = ?, 
            entry_text = ? 
            WHERE entry_id = ?";
    $data = array( $title, $entry, $id );
    $statement = $this->executeSQL( $sql, $data) ;
    return $statement;
}

	public function deleteEntry ( $id ) {
    $sql = "DELETE FROM blog_entry WHERE entry_id = ?";
    $data = array( $id );
    $statement = $this->executeSQL( $sql, $data );
}


}
?>
