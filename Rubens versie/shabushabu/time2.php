<?php

// Start session.
session_start();

// Initialize endtime message.
$endtime =  "De zitting duurt tot"." ".date('H:i:s', $_SESSION['endtime']);

// clicked on submit go to next page.
if (isset($_POST['submit'])) {
    header("Location: personal.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eindtijd...</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.cdnfonts.com/css/imagination-station" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/open-sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Include component. -->
    <?php require 'components/nav.php'; ?>

    <header>
        <form action="" method="post">
            
        <!--Display endtime-->
        <p style="color: black;"> <?= $endtime ?></p>
        <input type="submit" name="submit" value="Doorgaan">
        </form>
    </header>
</body>
</html>