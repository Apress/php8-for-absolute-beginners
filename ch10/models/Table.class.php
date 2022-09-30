<?php
//complete code listing for models/Table.class.php
class Table {
 
    protected $db;
    //notice there are two underscore characters in __construct
    public function __construct ( $db ) {
        $this->db = $db;
    }
	protected function executeSQL ( $sql, $data = NULL) {
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
}
?>
