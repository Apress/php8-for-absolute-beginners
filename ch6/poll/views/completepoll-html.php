<?php
//complete code listing for views/poll-html.php
//new code below
$dataFound = isset( $pollData );
if( $dataFound === false ){
    trigger_error( 'views/completepoll-html.php needs an $pollData object' );
}
 
$info = "
<aside id='poll'>
    <form method='post' action='completepollindex.php'>
            <p>$pollData->poll_question</p>
            <select name='user-input'>
                <option value='yes'>Yes, it is!</option>
                <option value='no'>No, not really!</option>
            </select>
            <input type='submit' value='post' />
    </form>
    <h1>Poll results</h1>
    <ul>
        <li>$pollData->yes said yes</li>
        <li>$pollData->no said no</li>
    </ul>
</aside>
";
?>
