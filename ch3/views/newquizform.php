<?php
//complete code for views/quizform.php
$info = "<form method='post' action='indexnewquiz.php?page=newquiz'>
        <p>Is it hard fun to learn PHP?</p>
        <select name='answer'>
            <option value='yes'>Yes, it is</option>
            <option value='no'>No, not really</option>
        </select>
        <input type='submit' name='quiz-submitted' value='post' />
    </form>";
?>
