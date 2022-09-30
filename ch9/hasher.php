<?php
$password = "Test";
$hashedpassword = password_hash($password, PASSWORD_DEFAULT);
echo $hashedpassword;
?>