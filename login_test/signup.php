<?php

INCLUDE_ONCE 'header.php';

if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p>Laat geen invoer veld leeg!</p>";
    } 
    else if ($_GET["error"] == "invaliduid") {
        echo "<p>Gebruikers naam bevat verboden tekens!</p>";
    } 
    else if ($_GET["error"] == "invalidemail") {
        echo "<p>Geef een echte email!</p>";
    } 
    else if ($_GET["error"] == "passwordsdontmatch") {
        echo "<p>Je gaf twee verschillende wachtwoorden!</p>";
    } 
    else if ($_GET["error"] == "usernametaken") {
        echo "<p>Gebruikers naam bestaat al!</p>";
    } 
    else if ($_GET["error"] == "stmtfailed") {
        echo "<p>Iets ging fout... probeer het opnieuw.</p>";
    } 
    else if ($_GET["error"] == "none") {
        echo "<p>U heeft een account aangemaakt!</p>";
    }
}


?>


<header>
    <div class="header-content">
        <section class ="signup-form">
            <h2>Sign Up here</h2>
            <form action="includes/signup.inc.php" method="POST"> 
                <input type="text" name="name" placeholder="Full name...">
                <input type="email" name="email" placeholder="Email...">
                <input type="text" name="uid" placeholder="Username...">
                <input type="password" name="pwd" placeholder="Password...">
                <input type="password" name="pwdrepeat" placeholder="Repeat password...">
                <button type="submit" name="submit">Sign Up<button>
            <form>
        </section>
    </div>
</header>
<main>
    
</main>

<?php
INCLUDE_ONCE 'footer.php';

?>

</body>
</html>
