<?php
// Include the database connection
include 'includes/connection.php';
//ignore error
/** @var mysqli $db */

// getting posted content from form.html
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = $_POST ['first_name'];
    $lastname = $_POST ['sir_name'];
    $email = $_POST ['email'];


    //sent the posted data to the list of reservations
    $query  = "INSERT INTO personal_details (firstname, lastname, email)
               VALUES ('$firstname', '$lastname', '$email')";
    mysqli_query($db, $query);



    // Redirect back to index.html
    header('Location: index.html');
    exit();
}

 

//close connection with database
mysqli_close($db);