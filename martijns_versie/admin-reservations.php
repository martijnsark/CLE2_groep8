<?php
require_once('includes/connection.php');

$query = "SELECT * FROM reservations";

/** @var $db mysqli */
$result = mysqli_query($db, $query)
or die('Error ' . mysqli_error($db) . ' with query ' . $query);

$reservations = [];

while ($row = mysqli_fetch_assoc($result)) {
    $reservations[] = $row;
}

mysqli_close($db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Reserveringen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="stylesheet" href="css/admin-style.css">
    <!--    <link href="https://fonts.cdnfonts.com/css/imagination-station" rel="stylesheet">-->
    <!--    <link href="https://fonts.cdnfonts.com/css/open-sans" rel="stylesheet">-->
    <!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
</head>
<body>
<!--<nav>-->
<!--    <img src="images/Shabu_Shabu_Logo.png" alt="ShabuShabu Logo">-->
<!--</nav>-->
<header class="hero is-primary">
    <div class="hero-body">
        <p class="title has-text-white">Reserveringen</p>
        <p class="subtitle has-text-white">Shabu Shabu Den Haag reserveringen</p>
    </div>
</header>

<main class="container">
    <section class="section">

        <div class="buttons">
            <a href="#">Maak nieuwe reservering</a>
            <div>
                <a href="#">Log in</a>
                <a href="#">Log uit</a>
                <a href="#">Maak account</a>
            </div>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th>Locatie</th>
                <th>Menu</th>
                <th>Datum</th>
                <th>Tijd</th>
                <th>Aantal</th>
                <th>Voornaam</th>
                <th>Achternaam</th>
                <th>Email</th>
                <th>Telefoonnummer</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <td colspan="6">&copy; Shabu Shabu Den Haag</td>
            </tr>
            </tfoot>
            <tbody>
            <!--        Loop through all reservations-->
            <?php foreach ($reservations as $i => $reservation) { ?>
                <tr>
                    <td> <?= htmlentities($reservation['location'] ?? '') ?></td>
                    <td> <?= htmlentities($reservation['menu_choice'] ?? '') ?></td>
                    <td> <?= htmlentities($reservation['date'] ?? '') ?></td>
                    <td> <?= htmlentities($reservation['time'] ?? '') ?></td>
                    <td> <?= htmlentities($reservation['amount_people'] ?? '') ?></td>
                    <td> <?= htmlentities($reservation['firstname'] ?? '') ?></td>
                    <td> <?= htmlentities($reservation['lastname'] ?? '') ?></td>
                    <td> <?= htmlentities($reservation['email'] ?? '') ?></td>
                    <td> <?= htmlentities($reservation['telnumber'] ?? '') ?></td>
                    <td><a href="#">Edit</a></td>
                    <td><a href="#">Delete</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

    </section>
</main>
<footer>

</footer>
</body>
</html>