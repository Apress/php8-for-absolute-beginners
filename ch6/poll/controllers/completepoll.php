<?php
//complete code listing for controllers/poll.php
include_once "models/FinalPoll.class.php";
$poll = new Poll( $db );
//check if form was submitted
$isPollSubmitted = isset( $_POST['user-input'] );
//if it was just submitted...
if ( $isPollSubmitted ) {
    //get input received from form
    $input = $_POST['user-input'];
     
    //...update model
    $poll->updatePoll( $input );
}
$pollData = $poll->getPollData();
include_once "views/completepoll-html.php";
?>
