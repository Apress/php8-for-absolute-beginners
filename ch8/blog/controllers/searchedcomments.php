<?php
//complete code for controllers/searchedcomments.php
include_once "models/Comment_Table.class.php";
$commentTable = new Comment_Table($db);

//new code here
$newCommentSubmitted = isset( $_POST['new-comment'] );
if ( $newCommentSubmitted ) {
    $whichEntry = $_POST['entry-id'];
    $user = $_POST['user-name'];
    $comment = $_POST['new-comment'];
    $commentTable->saveComment( $whichEntry, $user, $comment );  
}
//end of new code

include_once "views/searched-comment-form-html.php";

$allComments = $commentTable->getAllById( $entryId );
include_once "views/searched-comments-html.php";
?>



