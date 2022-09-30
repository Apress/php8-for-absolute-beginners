<?php
//complete code listing for models/Blog_Entry_Table.class.php
 
class Blog_Entry_Table {
 
    private $db;
    //notice there are two underscore characters in __construct
    public function __construct ( $db ) {
        $this->db = $db;
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
