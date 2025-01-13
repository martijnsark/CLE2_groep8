<?php
require_once('includes/connection.php');

$query = "SELECT * FROM personal_details";

/** @var $db mysqli */
$result = mysqli_query($db, $query)
or die('Error ' . mysqli_error($db) . ' with query ' . $query);

$details = [];

while ($row = mysqli_fetch_assoc($result)) {
    $details[] = $row;
}

mysqli_close($db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Klant Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="stylesheet" href="css/admin-style.css">
    <!--    <link href="https://fonts.cdnfonts.com/css/imagination-station" rel="stylesheet">-->
    <!--    <link href="https://fonts.cdnfonts.com/css/open-sans" rel="stylesheet">-->
    <!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
</head>
<body>
<header class="hero is-danger">
    <div class="hero-body">
        <p class="title has-text-primary">Klant Details</p>
        <p class="subtitle has-text-dangger">Shabu Shabu Den Haag Klanten</p>
    </div>
</header>

<main class="container">
    <section class="section">

        <div class="buttons">
            <a href="test-create.php">Klant toevoegen</a>
            <!--                    <div>-->
            <!--                        <a href="#">Log in</a>-->
            <!--                        <a href="#">Log uit</a>-->
            <!--                        <a href="#">Maak account</a>-->
            <!--                    </div>-->
        </div>

        <table class="table mx-auto">
            <thead>
            <tr>
                <th>Klant</th>
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
            <?php foreach ($details as $i => $detail) { ?>
                <tr>
                    <td> <?= ($i + 1) ?></td>
                    <td> <?= htmlentities($detail['firstname'] ?? '') ?></td>
                    <td> <?= htmlentities($detail['lastname'] ?? '') ?></td>
                    <td> <?= htmlentities($detail['email'] ?? '') ?></td>
                    <td> <?= htmlentities($detail['telnumber'] ?? '') ?></td>
                    <td><a href="test-edit.php?id=<?= htmlentities($detail['id']) ?>">Edit</a></td>
                    <td><a href="test-delete.php?id=<?= htmlentities($detail['id']) ?>">Delete</a></td>
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