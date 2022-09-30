<?php
//complete code listing for controllers/poll.php
include_once "models/Poll.class.php";
$poll = new Poll( $db );
$pollData = $poll->getPollData();
include_once "views/poll-html.php";
?>
