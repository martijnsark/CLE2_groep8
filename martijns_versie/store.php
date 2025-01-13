<?php
// Include the database connection
include 'includes/connection.php';
//ignore error
/** @var mysqli $db */

// getting posted content from form.html
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = $_POST ['first_name'];
    $lastname = $_POST ['last_name'];
    $email = $_POST ['email'];
    $telnumber = $_POST ['phone'];


    // Empty error array variable
    $errors = [];

    if (empty($firstname)) {
        $errors['first_name'] = "Voornaam is verplicht.";
    }

    if (empty($lastname)) {
        $errors['last_name'] = "Achternaam is verplicht.";
    }

    if (empty($email)) {
        $errors['email'] = "Email is verplicht.";
    }

    if (empty($telnumber)) {
        $errors['phone'] = "Telefoonnummer is verplicht.";
    } elseif (strlen($telnumber) < 9 || !is_numeric($telnumber)) {
        $errors['phone'] = "Telefoonnummer moet minstens 9 cijfers zijn";
    }

    //if error update errors onto form.php and return to form.php
    if (!empty($errors)) {
        include 'form.php';
        exit;
    }

    //sent the posted data to the list of reservations
    $query = "INSERT INTO personal_details (firstname, lastname, email, telnumber)
               VALUES ('$firstname', '$lastname', '$email', '$telnumber')";

    //execute querry
    $result = mysqli_query($db, $query);


    // query worked
    if ($result) {
        // Redirect to the main page
        header("Location: index.php");
        exit;
    } else {
        // Display error message if something went wrong with the query
        die("Error: " . mysqli_error($db));
    }
}


//close connection with database
mysqli_close($db);