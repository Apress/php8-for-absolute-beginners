<?php
//complete code listing for models/Searched_Blog_Entry_Table.class.php
 
//complete code for models/Comment_Table.class.php
include_once "models/Table.class.php";
 
class Searched_Blog_Entry_Table extends Table {
	
	
	//Declare new method in Blog_Entry_Table class
	public function searchEntry ( $searchTerm ) {
    $sql = "SELECT entry_id, title FROM blog_entry
            WHERE title LIKE ?
            OR entry_text LIKE ?";
    $data = array( "%$searchTerm%", "%$searchTerm%" );
    $statement = $this->executeSQL($sql, $data);
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
