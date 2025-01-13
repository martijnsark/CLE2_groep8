<?php

// Include db.
require 'auth/config.php';

// Start session.
session_start();

// Retrieve data selected from sessions.
$date = $_SESSION['date'];

// Prepare query to find open hours.
$queryAvailable = "SELECT * FROM `available_slots` WHERE `available` = 1 AND `date` = '$date' ";
$resultAvailable = mysqli_query($conn, $queryAvailable);

// Display selected date.
$date = date('l,d, F, Y ', strtotime($date));

// If clicked on submit store hours.
if (isset($_POST['submit'])) {

    // Store selected hours in session.
    $_SESSION['hours'] = $_POST['hours'];

    // Store selected hours in session.
    $_SESSION['dateDisplay'] = $date;

    // Calculate selected time + 1 hour 45 minutes.
    $endTime = strtotime("+105 minutes", strtotime($_SESSION['hours']));

    // Store end time in session.
    $_SESSION['endtime'] = $endTime;

    // Redirect to other time page.
    header("Location: time2.php");
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
    <?php require 'components/nav.php';?>

    <header>
    <form action="" method="post">
   <p style="color: black;"> <?= $date ?></p>

        <select name="hours">
            <option selected disabled>Kies een tijdstip</option>
            
            <!-- Fetch available hours. -->
            <?php while ($row = mysqli_fetch_assoc($resultAvailable)): ?>
                <option value="<?= $row['hours']; ?>"><?= $row['hours'] ?></option>
            <?php endwhile; ?>
        </select>
        <br>
        <input type="submit" name="submit" value="Doorgaan">
    </form>
    </header>
</body>

</html>