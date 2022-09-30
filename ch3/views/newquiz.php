<?php
//add a new variable and an if statement
$quizIsSubmitted = isset( $_POST['quiz-submitted'] );
if ( $quizIsSubmitted ){
    $answer = $_POST['answer'];
    $info = showQuizResponse( $answer );
} else {
    include_once "views/newquizform.php";
}
//keep the return statement as it was
//return $output;
//declare a new function
function showQuizResponse( $answer ){
    $response = "<p>You clicked $answer</p>";
    $response .= "<p>
        <a href='indexnewquiz.php?page=newquiz'>Try quiz again?</a>
    </p>";
    return $response;
}
?>
