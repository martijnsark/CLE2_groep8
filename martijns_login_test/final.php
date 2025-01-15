<?php

// include database connection.
require 'auth/config.php';

//Redirect to a protected page.
header("refresh:3;url=index.php");

// Display confirmation message.
$message =  "Bekijk je email voor de bevestiging";

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
    <header>
        <center>
            <p style="color: white;"><?= $message; ?></p>
        </center>
    </header>
</body>

</html>