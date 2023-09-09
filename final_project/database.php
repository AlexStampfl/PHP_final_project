<?php
//***MAKE SURE YOU CHANGE YOUR DBNAME, USERNAME & PASSWORD HERE
//CHECK phpmyadmin that you have '' database
//and that it is named like this
    $dsn = '';
    $username = '';
    $password = '';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
