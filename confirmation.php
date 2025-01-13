<?php

// Include config + send.php (for email)
require 'auth/config.php';
require 'send.php';

/*
    Session starts already in send.php to receive emails.
*/

// Sessions to local variables for readability.
$location      = $_SESSION['location'];
$menu_choice   = $_SESSION['menu_choice'];
$amount_people = $_SESSION['amount_people'];
$date          = $_SESSION['date'];
$time          = $_SESSION['hours'];
$firstname     = $_SESSION['firstname'];
$lastname      = $_SESSION['lastname'];
$email         = $_SESSION['email'];
$telnumber     = $_SESSION['telnumber'];
$hours         = $_SESSION['hours'];
$dateDisplay   = $_SESSION['dateDisplay'];

if (isset($_POST['submit'])) {

    // Query to update availablity.
    $updateAvailability = "UPDATE `available_slots` SET `available` = '0' WHERE `date` = '$date' AND `hours` = '$hours'";
    $resultupdatesAvailability = mysqli_query($db, $updateAvailability);

    // Query to insert.
    $insertReservation = "INSERT INTO `reservations` (`location`, `menu_choice`, `amount_people`, `date`, `time`, `firstname`, `lastname`, `email`, `telnumber`) VALUES ('$location', '$menu_choice', '$amount_people', '$date', '$time', '$firstname', '$lastname', '$email', '$telnumber')";
    $resultInsertReservation = mysqli_query($db, $insertReservation);

    // Redirect to other page.
    header("Location: final.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.cdnfonts.com/css/imagination-station" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/open-sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <!-- Include component. -->
    <?php require 'components/nav.php'; ?>
    <header>
    <form action="#" method="post">

        <p>Bevestig onderaan je reservering</p>
        <!-- Display everything related to location. -->
        <p style="color: black"><?= "Shabu Shabu " . $location . "<br>";    ?></p>

        <p style="color: black"> <?= $menu_choice . "<br>"; ?></p>
        <p style="color: black"><?= $dateDisplay . "om $hours" . "<br>"; ?></p>
        <p style="color: black"> <?= "Aantal personen: " . $amount_people . "<br> <br>"; ?></p>
        <!-- Display everything personal. -->
        <p style="color: black"> <?= $firstname . " " . $lastname . "<br>"; ?></p>
        <p style="color: black"><?= $email . "<br>"; ?></p>
        <p style="color: black"> <?= $telnumber . "<br>"; ?></p>
        <input type="submit" name="submit" value="Bevestig Reservering">
    </form>
    </header>
</body>

</html>