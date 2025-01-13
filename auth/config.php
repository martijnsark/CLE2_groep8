<?php


// error checks
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "./includes/connection.php";

// Database connecting
$db  = new mysqli($host, $user, $password, $database);

// Error handling
if ($db->connect_error) {
    die("Connection failed: ").$db->connect_error;
}
