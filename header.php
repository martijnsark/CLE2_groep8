<?php 
   if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shabu Shabu</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.cdnfonts.com/css/imagination-station" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/open-sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<nav>
    <div class="left-column">
        <a href="index.php">
            <img src="images/Shabu_Shabu_Logo.png" alt="ShabuShabu Logo">
        </a>
    </div>
    <div class="right-column">
        <!--        <a href="index.php">Home</a>-->
        <a href="about.php">Over ons</a>
        <!--        <a href="index.php">Reserveren</a>-->
        <a href="contact.php">Contact</a>
        <?php
        if (isset($_SESSION["user"])) {
            echo "<a href='profile.php'>Profile page</a>";
            echo "<a href='includes/logout.inc.php'>Log out</a>";
        } else {
            echo "<a href='signup.php'>Sign up</a>";
            echo "<a href='login.php'>Log in</a>";
        }
        ?>
    </div>
</nav>





