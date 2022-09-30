<?php
//complete code for models/Comment_Table.class.php
include_once "models/Table.class.php";
 
class Comment_Table extends Table{

	public function saveComment ( $entryId, $author, $txt ) {
        $sql = "INSERT INTO comment ( entry_id, author, txt) 
                VALUES (?, ?, ?)";
        $data = array( $entryId, $author, $txt );
        $statement = $this->executeSQL($sql, $data);
        return $statement;
    }
	public function getAllById ( $id ) {
    $sql = "SELECT author, txt, date FROM comment
            WHERE entry_id = ?
            ORDER BY comment_id DESC";
    $data = array($id);
    $statement = $this->executeSQL($sql, $data);
    return $statement;
}
//New Method
public function deleteByEntryId( $id ) {
    $sql = "DELETE FROM comment WHERE entry_id = ?";
    $data = array( $id );
    $statement = $this->executeSQL( $sql, $data );  
}

}
?>