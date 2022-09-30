<?php
//complete code for views/fileType-form-html.php
 
$info .= "
<form action='index.php?page=fileType' method='post' id='fileType-form'>

	<label>Select the data file type</label><br><br>
	<input type='radio' id='Database' name='file_type' value='Database'>
	<label for='Database'>mySQL/MariaDB Database</label><br>
	<input type='radio' id='Excel' name='file_type' value='Excel'>
	<label for='Excel'>Microsoft Excel</label><br>
	<input type='radio' id='JSON' name='file_type' value='JSON'>
	<label for='JSON'> JSON - JavaScript Array</label><br>
	<input type='radio' id='CSV' name='file_type' value='CSV'>
	<label for='CSV'>CSV - Comma Seperated</label><br> 
	
    <input type='submit' value='submit' />
</form>";
?>