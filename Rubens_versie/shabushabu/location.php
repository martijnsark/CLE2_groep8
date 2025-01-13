<?php

if (isset($_POST['submit'])) {

    // Start session.
    session_start();

    // Store posted values in sessions.
     $_SESSION['location']       = $_POST['location'];
     $_SESSION['menu_choice']    = $_POST['menu_choice'];
     $_SESSION['amount_people']  = $_POST['amount_people'];
     $_SESSION['date']           = $_POST['date'];


    //  Redirect user to select time.
    header("Location: ../time.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservering - <?=basename(__FILE__, '.php');?> </title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.cdnfonts.com/css/imagination-station" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/open-sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
</head>
<body>
<?php require 'components/nav.php'; ?>

    <form action="#" method="POST">
        <!-- File name as location value. -->
        <input type="hidden" name="location" value="<?=basename(__FILE__, '.php');?>">
        <p>Maak hier je reservering:</p>
        <select name="menu_choice">
            <option value="Kies een optie" disabled aria-placeholder="kies een optie">Kies een optie</option>
            <option value="Lunch">Lunch</option>
            <option value="Diner">Diner</option>
        </select>

        <p>Aantal personen:</p>
        <select name="amount_people" id="amount_people">
            <option value="2">2 personen</option>
            <option value="3">3 personen</option>
            <option value="4">4 personen</option>
            <option value="5">5 personen</option>
            <option value="6">6 personen</option>
        </select>

        <input type="date" name="date">

        <input type="submit" name="submit" value="Doorgaan">
    </form>

</body>

</html>