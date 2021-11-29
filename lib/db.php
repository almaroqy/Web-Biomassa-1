<?php
$db_host = 'localhost:3307';
$db_database = 'db_perpus';
$db_username = 'root';
$db_password = 'mysql00650193';

// Connect database
$db = new mysqli ($db_host, $db_username, $db_password, $db_database);

// Error
if ($db->connect_errno){
    die ("Could not connect to the database: <br />" . $db->connect_error);
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}