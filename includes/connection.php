<?php
// General settings
$host       = "127.0.0.1";
$database   = "ShabuShabu";
$user       = "root";
$password   = "";

// Database connection
$db = mysqli_connect($host, $user, $password, $database)
or die("Error: " . mysqli_connect_error());


