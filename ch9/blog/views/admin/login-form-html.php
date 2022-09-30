<?php
//complete code for views/admin/login-form-html.php
$info = " <form method='post' action='loginadmin.php'>
    <h1>Login to access restricted area</h1>
    <label>userid</label><input type='userid' name='userid' required />
    <label>password</label>
    <input type='password' name='password' required />
    <input type='submit' value='login' name='log-in' />
</form>";
?>