<?php
//complete code for controllers/searched.php
include_once "models/Searched_Blog_Entry_Table.class.php";
$blogTable = new Searched_Blog_Entry_Table( $db );
 
if ( isset($_POST['search-term']) ){
    $searchTerm = $_POST['search-term'];
    $searchData = $blogTable->searchEntry( $searchTerm ) ;
    include_once "views/searched-results-html.php"; 
}
?>