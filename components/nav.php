<?php 
    session_start();
?>

<nav>
    <div class="left-column">
        <img src="images/Shabu_Shabu_Logo.png" alt="ShabuShabu Logo">
    </div>
    <div class="right-column">
        <a href="index.php">Home</a>
        <a href="about.php">Over ons</a>
        <a href="index.php">Reserveren</a>
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