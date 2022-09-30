<?php
//complete code listing for models/Blog_Entry_Table.class.php
 
class New_Blog_Entry_Table {
 
    private $db;
    //notice there are two underscore characters in __construct
    public function __construct ( $db ) {
        $this->db = $db;
    }
    public function getAllEntries () {
    $sql = "SELECT entry_id, title, 
            SUBSTRING(entry_text, 1, 150) AS intro 
            FROM blog_entry";
    $statement = $this->db->prepare( $sql );
    try {
        $statement->execute();
    } catch ( Exception $e ) {
        $exceptionMessage = "<p>You tried to run this sql: $sql <p>
                <p>Exception: $e</p>";
        trigger_error($exceptionMessage);
    }
    return $statement;
} 

    public function saveEntry ( $title, $entry ) {
    //notice placeholders in SQL string. ? is a placeholder
    //notice the order of attributes: first title, next entry_text
    $entrySQL = "INSERT INTO blog_entry ( title, entry_text ) 
                 VALUES ( ?, ?)";
    $entryStatement = $this->db->prepare( $entrySQL );
    //create an array with dynamic data
    //Order is important: $title must come first, $entry second
    $formData = array( $title, $entry ); 
    try{
        //pass $formData as argument to execute
        $entryStatement->execute( $formData );
    } catch (Exception $e){
        $msg = "<p>You tried to run this sql: $entrySQL<p>
                <p>Exception: $e</p>";
        trigger_error($msg);
    }
}
}
?>
