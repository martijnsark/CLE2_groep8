<?php
//session_start();
//REWRITTEN BY CHARGE 16 01 2025
$firstname = $lastname = $email = $birthdate = $telnumber = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Persoonlijke info opslaan
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $birthdate = $_POST['birthdate'];
    $telnumber = trim($_POST['telnumber'] ?? '');

    // Voornaam valideren
    if (empty($firstname)) {
        $errors['firstname'] = "Voornaam is verplicht.";
    }

    // Ook de achternaam
    if (empty($lastname)) {
        $errors['lastname'] = "Achternaam is verplicht.";
    }

    // Email moet lijken op een email en ingevuld zijn
    if (empty($email)) {
        $errors['email'] = "E-mail is verplicht.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { //coole filter voor email https://www.w3schools.com/php/filter_validate_email.asp
        $errors['email'] = "Voer een geldig e-mailadres in.";
    }

    // Geboortedatum moet ingevuld zijn
    if (empty($birthdate)) {
        $errors['birthdate'] = "Geboortedatum is verplicht.";
    }

    // Telefoonnummer moet ingevuld zijn en beginnen met +316
    if (empty($telnumber)) {
        $errors['telnumber'] = "Telefoonnummer is verplicht.";
    } elseif (!preg_match("/^\+316[0-9]{8}$/", $telnumber)) {
        $errors['telnumber'] = "Voer een geldig Telefoonnummer in.";
    }

    // Als er geen errors zijn kan de data geprocessed worden
    if (empty($errors)) {
        // process de data, stuur naar de database
        // header naar confirmation.php
        header("Location: confirmation.php");
        exit();
    }
}
$defaultTelnumber = '+316';
$telnumberValue = !empty($telnumber) ? htmlspecialchars($telnumber) : $defaultTelnumber;
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
<!--        <p style="color: black;"> --><?php //= $_SESSION['dateDisplay'] . " om " . $_SESSION['hours'] . " - " . $_SESSION['amount_people'] . " personen"; ?><!-- </p>-->
        <br>
        <label style="color: black" for="firstname">Voornaam:</label>
        <input type="text" id="firstname" name="firstname" value="<?= htmlspecialchars($firstname); ?>">
        <?php if (isset($errors['firstname'])) { ?>
            <p style="color: red; font-size: 0.8rem;"><?= $errors['firstname']; ?></p>
        <?php } ?>
        <br>

        <label style="color: black" for="lastname">Achternaam:</label>
        <input type="text" id="lastname" name="lastname" value="<?= htmlspecialchars($lastname); ?>">
        <?php if (isset($errors['lastname'])){ ?>
            <p style="color: red; font-size: 0.8rem;"><?= $errors['lastname']; ?></p>
        <?php }?>
        <br>

        <label style="color: black" for="email">E-mail:</label>
        <input type="text" id="email" name="email" value="<?= htmlspecialchars($email); ?>">
        <?php if (isset($errors['email'])){ ?>
            <p style="color: red; font-size: 0.8rem;"><?= $errors['email']; ?></p>
        <?php }?>
        <br>

        <label style="color: black" for="birthdate">Geboortedatum:</label>
        <input type="date" id="birthdate" name="birthdate" value="<?= htmlspecialchars($birthdate); ?>">
        <?php if (isset($errors['birthdate'])){?>
            <p style="color: red; font-size: 0.8rem;"><?= $errors['birthdate']; ?></p>
        <?php }?>
        <br>

        <label style="color: black" for="telnumber">Telefoonnummer:</label>
        <input type="tel" id="telnumber" name="telnumber" value="+316" class="tel-input" />

        <script>
            const telInput = document.getElementById('telnumber');
            const prefix = '+316';

            // Set the initial value
            telInput.value = prefix;

            // Add event listener to handle input
            telInput.addEventListener('input', function() {
                // If the input value does not start with the prefix, reset it
                if (!telInput.value.startsWith(prefix)) {
                    telInput.value = prefix; // Reset to prefix
                }
            });

            // Prevent deletion of the prefix
            telInput.addEventListener('keydown', function(event) {
                // If the user tries to delete the prefix (backspace or delete)
                if (telInput.selectionStart < prefix.length && (event.key === 'Backspace' || event.key === 'Delete')) {
                    event.preventDefault(); // Prevent the default action
                }
            });
        </script>

        <?php if (isset($errors['telnumber'])) { ?>
            <p style="color: red; font-size: 0.8rem;"><?= htmlspecialchars($errors['telnumber']); ?></p>
        <?php } ?>
        <br>


        <input type="submit" name="submit" value="Bevestiging">
    </form>
</header>
</body>

</html>

