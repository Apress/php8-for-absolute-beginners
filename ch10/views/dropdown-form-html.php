<?php
//complete code for views/dropdown-form-html.php

$idIsFound = isset($type);
$DDIsFound = isset($dropdown);
 
if( $idIsFound === false ) {
    trigger_error('views/dropdown-html.php needs an $type');
}
if( $DDIsFound === false ) {
    trigger_error('views/dropdown-html.php needs an $dropdown');
}
$info .= "
<form action='index.php?page=$type' method='post' id='comment-form'>

	<label>Select one $type</label><br>"
		. $dropdown .
	"<br><br><input type='submit' value='submit!' />
</form>";
?>