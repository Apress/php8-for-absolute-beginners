<?php
//complete code for views/quizform.php
$info = "<form method='post' action='index.php?page=quiz'>
        <p>Is it hard fun to learn PHP?</p>
        <select name='answer'>
            <option value='yes'>Yes, it is</option>
            <option value='no'>No, not really</option>
        </select>
        <input type='submit' name='quiz-submitted' value='post' />
    </form>";
?>
