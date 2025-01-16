<?php
// Rewritten by Sissi 15-01-2025

/** @var $db mysqli */

require_once('includes/connection.php');

// required when working with sessions
session_start();

$login = false;
// Is user logged in?
if (isset($_SESSION['user'])) {
    header('Location: index.php');
    exit();
}

if (isset($_POST['submit'])) {

    // Get form data
    $password = $_POST['password'];
    $email = mysqli_escape_string($db, $_POST['email']);

    // Server-side validation
    $errors = [];

    if ($password == '') {
        $errors['password'] = 'Please fill in a password';
    }
    if ($email == '') {
        $errors['email'] = 'Email cannot be empty';
    }

    // If data valid
    if (empty($errors)) {
        // SELECT the user from the database, based on the email address.
        $query = "SELECT * FROM users WHERE email = '$email'";

        /** @var $db mysqli */
        $result = mysqli_query($db, $query)
        or die('Error ' . mysqli_error($db) . ' with query ' . $query);

        // check if the user exists
        if (mysqli_num_rows($result) == 1) {

            // Get user data from result
            $row = mysqli_fetch_assoc($result);

            // Check if the provided password matches the stored password in the database
            if (password_verify($password, $row['password'])) {

                // Store the user in the session
                $_SESSION['user'] = $email;

                // Redirect to secure page
                header('Location: index.php');
                exit();
            } else {
                // Credentials not valid
                $errors['loginFailed'] = 'De combinatie van de opgegeven inloggevens kloppen niet, probeer het opnieuw.';
            }
            //error incorrect log in
        } else {
            // User doesn't exist
            $errors['loginFailed'] = 'De combinatie van de opgegeven inloggevens kloppen niet, probeer het opnieuw.';
        }
        //error incorrect log in

    }
}

include_once 'header.php';

?>


<header>
    <div class="header-content">

        <?php if ($login) { ?>
            <p>Je bent ingelogd!</p>
            <p><a href="logout.php">Uitloggen</a> / <a href="secure.php">Naar secure page</a></p>
        <?php } else { ?>

            <section class="columns">
                <h2 class="title">Log in</h2>
                <form class="column is-6" action="" method="post">

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label" for="email">E-mail</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control has-icons-left">
                                    <input class="input" id="email" type="text" name="email"
                                           value="<?= htmlentities($email ?? '') ?>"/>
                                    <span class="icon is-small is-left"><i class="fas fa-envelope"></i></span>
                                </div>
                                <p class="help is-danger">
                                    <?= $errors['email'] ?? '' ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label is-normal">
                            <label class="label" for="password">Wachtwoord</label>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <div class="control has-icons-left">
                                    <input class="input" id="password" type="password" name="password"/>
                                    <span class="icon is-small is-left"><i class="fas fa-lock"></i></span>

                                    <?php if (isset($errors['loginFailed'])) { ?>
                                        <div class="notification is-danger">
                                            <button class="delete"></button>
                                            <?= $errors['loginFailed'] ?>
                                        </div>
                                    <?php } ?>

                                </div>
                                <p class="help is-danger">
                                    <?= $errors['password'] ?? '' ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="field is-horizontal">
                        <div class="field-label is-normal"></div>
                        <div class="field-body">
                            <button class="button is-info has-text-white is-fullwidth" type="submit" name="submit">Log
                                in
                            </button>
                        </div>
                    </div>
                </form>
            </section>

        <?php } ?>

    </div>
</header>
<main>

</main>

<?php
include_once 'footer.php';

?>

</body>
</html>
