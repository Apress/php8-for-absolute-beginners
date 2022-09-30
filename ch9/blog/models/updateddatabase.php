<?php
$dbInfo = "mysql:host=localhost;dbname=simple_blog1";
$dbUser = "root";
$dbPassword = "";
try {
    //create a database connection with a PDO object
    $db = new PDO( $dbInfo, $dbUser, $dbPassword );
}catch (PDOException $e) {
        $error_message = $e->getMessage();
        $pageData->setContent("<h1>Connection failed!</h1><p>$e</p>");
        exit();
    }
?>