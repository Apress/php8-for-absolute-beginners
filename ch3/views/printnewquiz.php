<?php
//add a new variable and an if statement
$quizIsSubmitted = isset( $_POST['quiz-submitted'] );
if ( $quizIsSubmitted ){
    $answer = $_POST['answer'];
    $info = showQuizResponse( $answer );
	
	$answer = $_POST['answer'];
    $info = showQuizResponse( $answer );
    //inspect the $_POST superglobal array
    $info .= "<pre>";
    $info .= print_r($_POST, true);
    $info .= "</pre>";
} else {
    include_once "views/printnewquizform.php";
}
//declare a new function
function showQuizResponse( $answer ){
    $response = "<p>You clicked $answer</p>";
    $response .= "<p>
        <a href='indexprintnewquiz.php?page=printnewquiz'>Try quiz again?</a>
    </p>";
    return $response;
}
?>
