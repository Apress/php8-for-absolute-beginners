<?php
//complete code for views/poll-html.php
$info = "
<aside id='poll'>
    <h1>Poll results</h1>
    <ul>
        <li> " . $pollData->getYes() . " said yes</li>
        <li> " . $pollData->getNo() . " said no</li>
    </ul>
</aside>
";
?>