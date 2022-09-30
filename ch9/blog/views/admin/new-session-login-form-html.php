<?php
//complete code for views/admin/new-session-login-form-html.php
$info = " <form method='post' action='newsessionadmin.php'>
    <h1>Login to access restricted area</h1>
    <label>userid</label><input type='userid' name='userid' required />
    <label>password</label>
    <input type='password' name='password' required />
    <input type='submit' value='login' name='log-in' />
</form>";
?>