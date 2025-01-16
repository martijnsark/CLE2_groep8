<?php

//REWRITTEN BY CHARGE 16 01 2025

/** @var $db*/

require_once("includes/connection.php");

session_start();

$firstname = $lastname = $email = $birthdate = $telnumber = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Persoonlijke info opslaan
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $birthdate = $_POST['birthdate'];
    $telnumber = trim($_POST['telnumber'] ?? '');
    $password = trim($_POST['password']);

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
        //wachtwoord hashen
        $securePassword = password_hash($password, PASSWORD_DEFAULT);
        // process de data, stuur naar de database
        //$query = "SELECT * FROM users WHERE email = '$email'";
        $query = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `birthdate`, `telnumber`, `password`)
VALUES ('$firstname', '$lastname', '$email', '$birthdate', '$telnumber', '$securePassword')";
        $result = mysqli_query($db, $query)
            or die('Error' . mysqli_error($db). ' with query ' . $query);


        mysqli_close($db);
        // header naar confirmation.php
        if ($result){
            header('Location: login.php');
        }
        exit();
    }
}
$defaultTelnumber = '+316';
$telnumberValue = !empty($telnumber) ? htmlspecialchars($telnumber) : $defaultTelnumber;

include_once 'header.php';
?>

<header>
    <div class="header-content">
        <section class="signup-form">
            <h2>Maak hier je account aan</h2>

            <!--            <form action="#" method="post">-->
            <!--                <!--        <p style="color: black;"> -->-->
            <?php ////= $_SESSION['dateDisplay'] . " om " . $_SESSION['hours'] . " - " . $_SESSION['amount_people'] . " personen"; ?><!--<!-- </p>-->
            -->
            <!--                <br>-->
            <!--                <label style="color: black" for="firstname">Voornaam:</label>-->
            <!--                <input type="text" id="firstname" name="firstname" value="-->
            <?php //= htmlspecialchars($firstname); ?><!--">-->
            <!--                --><?php //if (isset($errors['firstname'])) { ?>
            <!--                    <p style="color: red; font-size: 0.8rem;">-->
            <?php //= $errors['firstname']; ?><!--</p>-->
            <!--                --><?php //} ?>
            <!--                <br>-->
            <!---->
            <!--                <label style="color: black" for="lastname">Achternaam:</label>-->
            <!--                <input type="text" id="lastname" name="lastname" value="-->
            <?php //= htmlspecialchars($lastname); ?><!--">-->
            <!--                --><?php //if (isset($errors['lastname'])){ ?>
            <!--                    <p style="color: red; font-size: 0.8rem;">-->
            <?php //= $errors['lastname']; ?><!--</p>-->
            <!--                --><?php //}?>
            <!--                <br>-->
            <!---->
            <!--                <label style="color: black" for="email">E-mail:</label>-->
            <!--                <input type="text" id="email" name="email" value="-->
            <?php //= htmlspecialchars($email); ?><!--">-->
            <!--                --><?php //if (isset($errors['email'])){ ?>
            <!--                    <p style="color: red; font-size: 0.8rem;">-->
            <?php //= $errors['email']; ?><!--</p>-->
            <!--                --><?php //}?>
            <!--                <br>-->
            <!---->
            <!--                <label style="color: black" for="birthdate">Geboortedatum:</label>-->
            <!--                <input type="date" id="birthdate" name="birthdate" value="-->
            <?php //= htmlspecialchars($birthdate); ?><!--">-->
            <!--                --><?php //if (isset($errors['birthdate'])){?>
            <!--                    <p style="color: red; font-size: 0.8rem;">-->
            <?php //= $errors['birthdate']; ?><!--</p>-->
            <!--                --><?php //}?>
            <!--                <br>-->
            <!---->
            <!--                <label style="color: black" for="telnumber">Telefoonnummer:</label>-->
            <!--                <input type="tel" id="telnumber" name="telnumber" value="+316" class="tel-input" />-->
            <!---->
            <!--                <script>-->
            <!--                    const telInput = document.getElementById('telnumber');-->
            <!--                    const prefix = '+316';-->
            <!---->
            <!--                    // Set the initial value-->
            <!--                    telInput.value = prefix;-->
            <!---->
            <!--                    // Add event listener to handle input-->
            <!--                    telInput.addEventListener('input', function() {-->
            <!--                        // If the input value does not start with the prefix, reset it-->
            <!--                        if (!telInput.value.startsWith(prefix)) {-->
            <!--                            telInput.value = prefix; // Reset to prefix-->
            <!--                        }-->
            <!--                    });-->
            <!---->
            <!--                    // Prevent deletion of the prefix-->
            <!--                    telInput.addEventListener('keydown', function(event) {-->
            <!--                        // If the user tries to delete the prefix (backspace or delete)-->
            <!--                        if (telInput.selectionStart < prefix.length && (event.key === 'Backspace' || event.key === 'Delete')) {-->
            <!--                            event.preventDefault(); // Prevent the default action-->
            <!--                        }-->
            <!--                    });-->
            <!--                </script>-->
            <!---->
            <!--                --><?php //if (isset($errors['telnumber'])) { ?>
            <!--                    <p style="color: red; font-size: 0.8rem;">-->
            <?php //= htmlspecialchars($errors['telnumber']); ?><!--</p>-->
            <!--                --><?php //} ?>
            <!--                <br>-->
            <!---->
            <!--                <label style="color: black" for="password">Wachtwoord:</label>-->
            <!--                <input type="password" id="password" name="password" value="">-->
            <!--                --><?php //if (isset($errors['password'])){ ?>
            <!--                    <p style="color: red; font-size: 0.8rem;">-->
            <?php //= $errors['password']; ?><!--</p>-->
            <!--                --><?php //}?>
            <!--                <br>-->
            <!---->
            <!---->
            <!---->
            <!---->
            <!--                <input type="submit" name="submit" value="Bevestiging">-->
            <!--            </form>-->
            <form action="#" method="post">
                <label style="color: black" for="firstname">Voornaam:</label>
                <input type="text" id="firstname" name="firstname" value="<?= htmlspecialchars($firstname); ?>">
                <?php if (isset($errors['firstname'])) { ?>
                    <p style="color: red; font-size: 0.8rem;"><?= $errors['firstname']; ?></p>
                <?php } ?>
                <br>

                <label style="color: black" for="lastname">Achternaam:</label>
                <input type="text" id="lastname" name="lastname" value="<?= htmlspecialchars($lastname); ?>">
                <?php if (isset($errors['lastname'])) { ?>
                    <p style="color: red; font-size: 0.8rem;"><?= $errors['lastname']; ?></p>
                <?php } ?>
                <br>

                <label style="color: black" for="email">E-mail:</label>
                <input type="text" id="email" name="email" value="<?= htmlspecialchars($email); ?>">
                <?php if (isset($errors['email'])) { ?>
                    <p style="color: red; font-size: 0.8rem;"><?= $errors['email']; ?></p>
                <?php } ?>
                <br>

                <label style="color: black" for="birthdate">Geboortedatum:</label>
                <input type="date" id="birthdate" name="birthdate" value="<?= htmlspecialchars($birthdate); ?>">
                <?php if (isset($errors['birthdate'])) { ?>
                    <p style="color: red; font-size: 0.8rem;"><?= $errors['birthdate']; ?></p>
                <?php } ?>
                <br>

                <label style="color: black" for="telnumber">Telefoonnummer:</label>
                <input type="tel" id="telnumber" name="telnumber" value="+316" class="tel-input">
                <script>
                    const telInput = document.getElementById('telnumber');
                    const prefix = '+316';

                    telInput.value = prefix;

                    telInput.addEventListener('input', function () {
                        if (!telInput.value.startsWith(prefix)) {
                            telInput.value = prefix;
                        }
                    });

                    telInput.addEventListener('keydown', function (event) {
                        if (telInput.selectionStart < prefix.length && (event.key === 'Backspace' || event.key === 'Delete')) {
                            event.preventDefault();
                        }
                    });
                </script>
                <?php if (isset($errors['telnumber'])) { ?>
                    <p style="color: red; font-size: 0.8rem;"><?= htmlspecialchars($errors['telnumber']); ?></p>
                <?php } ?>
                <br>

                <label style="color: black" for="password">Wachtwoord:</label>
                <input type="password" id="password" name="password" value="">
                <?php if (isset($errors['password'])) { ?>
                    <p style="color: red; font-size: 0.8rem;"><?= $errors['password']; ?></p>
                <?php } ?>
                <br>

                <input type="submit" name="submit" value="Bevestiging">
            </form>

        </section>
    </div>
</header>
<main>

</main>

<?php
include_once 'footer.php';

?>

</body>
</html>
