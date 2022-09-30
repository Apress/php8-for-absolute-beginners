<?php
//complete code listing for controllers/poll.php
include_once "models/NewestPoll.class.php";
$poll = new Poll( $db );
$pollData = $poll->getPollData();
include_once "views/finalpoll-html.php";
?>
