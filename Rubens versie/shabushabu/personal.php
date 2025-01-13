<?php

require 'auth/config.php';

session_start();

if (isset($_POST['submit'])) {

    // Store personal info in sessions.
    $_SESSION['firstname'] = $_POST['firstname'];
    $_SESSION['lastname']  = $_POST['lastname'];
    $_SESSION['email']     = $_POST['email'];
    $_SESSION['birthdate'] = $_POST['birthdate'];
    $_SESSION['telnumber'] = $_POST['telnumber'];

    // Redirect to other page.
    header("Location: confirmation.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gegevens</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.cdnfonts.com/css/imagination-station" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/open-sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php require 'components/nav.php'; ?>
    <header>
    <p style="color: black;"></p>

        <form action="#" method="post">
        <p style="color: black;"> <?= $_SESSION['dateDisplay'] . " om " . $_SESSION['hours'] . " - " . $_SESSION['amount_people'] . " personen"; ?> </p>
            <br>
            <label style="color: black" for="firstname">Voornaam:</label>
            <input type="text" name="firstname">
            <br>
            <label style="color: black" for="lastname">Achternaam:</label>
            <input type="text" name="lastname">
            <br>
            <label style="color: black" for="email">E-mail:</label>
            <input type="text" name="email">
            <br>
            <label style="color: black" for="birthdate">Geboortedatum:</label>
            <input type="date" name="birthdate">
            <br>
            <label style="color: black" for="telnumber">telefoonnummer:</label>
            <input type="text" name="telnumber">
            <br>
            <input type="submit" name="submit" value="Bevestiging">
        </form>
    </header>
</body>

</html>