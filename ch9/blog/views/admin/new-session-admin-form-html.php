<?php
//complete code for views/admin/new-session-admin-form-html.php
if( isset($adminFormMessage) === false ) {
    $adminFormMessage = "";
}
 
$info .= "<form method='post' action='newsessionadmin.php?page=users'>
    <fieldset>
        <legend>Create new admin user</legend>
        
		<label for='userid'>Userid</label>
		<input type='text' name='userid' id='userid'
		minlength='8'
		required>

		<label for='password'>Password</label>
		<input type='password' name='password' 
		pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}' 
		title='Password must contain: at least one number, one uppercase letter, one lowercase letter, and 8 or more characters' 
		required>
		
		<label for='email'>e-mail</label>
        <input type='email' name='email' required/>
		
        <input type='submit' value='create user' name='new-admin'/>
    </fieldset>
    <p id='admin-form-message'>$adminFormMessage</p>
</form>
";
?>