<?php
require_once('includes/connection.php');

/** @var $db mysqli */
$id = mysqli_escape_string($db, $_GET['id']);

$query = "SELECT * FROM personal_details WHERE `id` = '$id'";
$result = mysqli_query($db, $query);

if ($result) {
    $details = mysqli_fetch_assoc($result);
    $firstname = $details['firstname'] ?? '';
    $lastname = $details['lastname'] ?? '';
    $email = $details['email'] ?? '';
    $telnumber = $details['telnumber'] ?? '';
}

if (isset($_POST['submit'])) {
    $firstname = mysqli_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_escape_string($db, $_POST['lastname']);
    $email = mysqli_escape_string($db, $_POST['email']);
    $telnumber = mysqli_escape_string($db, $_POST['telnumber']);

    $errors = [];

    if ($firstname === '') {
        $errors['emptyfirstname'] = "Voornaam moet ingevuld zijn";
    }
    if ($lastname === '') {
        $errors['emptylastname'] = "Achternaam moet ingevuld zijn";
    }
    if ($email === '') {
        $errors['emptyemail'] = "Email moet ingevuld zijn";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['notemail'] = "Onngeldige email";
    }
    if ($telnumber === '') {
        $errors['emptytelnumber'] = "Telefoonnummer moet ingevuld zijn";
    } elseif (!is_numeric($telnumber)) {
        $errors['telnumbernotnumber'] = "Telefoonnummer moet een nummer zijn";
    }

    if (empty($errors)) {

        $query = "UPDATE `personal_details` 
                SET `firstname`='$firstname', `lastname`='$lastname', `email`='$email', `telnumber`='$telnumber'
                WHERE id = '$id'";

        /** @var $db mysqli */
        $result = mysqli_query($db, $query)
        or die('Error ' . mysqli_error($db) . ' with query ' . $query);

        mysqli_close($db);

        header('Location: test-personal-details.php');
        exit;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="stylesheet" href="css/admin-style.css">

    <title>Klant wijzigen</title>
</head>
<body>
<div class="container px-4">

    <section class="columns is-centered">
        <div class="column is-10">
            <h2 class="title mt-4">Wijzig klantgegevens</h2>

            <form class="column is-6" action="" method="POST">

                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label" for="firstname">Voornaam</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <input class="input" id="firstname" type="text" name="firstname"
                                       value="<?= htmlentities($firstname ?? '') ?>"/>
                            </div>
                            <p class="help is-link">
                                <?= $errors['emptyfirstname'] ?? '' ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label" for="lastname">Achternaam</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <input class="input" id="lastname" type="text" name="lastname"
                                       value="<?= htmlentities($lastname ?? '') ?>"/>
                            </div>
                            <p class="help is-link">
                                <?= $errors['emptylastname'] ?? '' ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label" for="email">Email</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <input class="input" id="email" type="text" name="email"
                                       value="<?= htmlentities($email ?? '') ?>"/>
                            </div>
                            <p class="help is-link">
                                <?= $errors['emptyemail'] ?? '' ?>
                                <?= $errors['notemail'] ?? '' ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="field is-horizontal">
                    <div class="field-label is-normal">
                        <label class="label" for="telnumber">Telefoonnummer</label>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <input class="input" id="telnumber" type="text" name="telnumber"
                                       value="<?= htmlentities($telnumber ?? '') ?>"/>
                            </div>
                            <p class="help is-link">
                                <?= $errors['emptytelnumber'] ?? '' ?>
                                <?= $errors['telnumbernotnumber'] ?? '' ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-label is-normal"></div>
                    <div class="field-body">
                        <button class="button is-link has-text-white is-fullwidth" type="submit" name="submit">
                            Toevoegen
                        </button>
                    </div>
                </div>
            </form>

            <a class="button mt-4" href="test-personal-details.php">&laquo; Go back to the list</a>
        </div>
    </section>
</div>
</body>
</html>