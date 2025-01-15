<?php
//show header
INCLUDE_ONCE 'header.php';


?>


<header>
    <div class="header-content">
        <section class ="signup-form">
            <?php 
            //is there a "error" in the URL yes? go ahead no? skip
            if (isset($_GET["error"])) {

                //check which error was given and execute fitting error message
                if ($_GET["error"] == 'emptyinput') {
                    echo"<p>Niet alle nodige informatie was gegeven!<p>";
                }
                else if ($_GET["error"] == 'invaliduid') {
                    echo"<p>Probeer een anderen naam!<p>";
                }
                else if ($_GET["error"] == 'invalidemail') {
                    echo"<p>Incorrecte email!<p>";
                }
                else if ($_GET["error"] == 'passwordsdontmatch') {
                    echo"<p>Wachtwoorden zijn niet het zelfde<p>";
                }
                else if ($_GET["error"] == 'useralreadyexists') {
                    echo"<p>Een gebruiker met deze email en/of username bestaat al!<p>";
                }
                else if ($_GET["error"] == 'stmtfailed') {
                    echo"<p>iets ging fout, probeer het opnieuw.<p>";
                }
                else if ($_GET["error"] == 'none') {
                    echo"<p>Je hebt jouw account aangemaakt.<p>";
                }
            }
            ?>
            <h2>Sign Up here</h2>
            <form action="includes/signup.inc.php" method="POST"> 
                <input type="text" name="name" placeholder="Full name...">
                <input type="email" name="email" placeholder="Email...">
                <input type="text" name="uid" placeholder="Username...">
                <input type="password" name="pwd" placeholder="Password...">
                <input type="password" name="pwdrepeat" placeholder="Repeat password...">
                <button type="submit" name="submit">Sign Up<button>
            </form>
        </section>
    </div>
</header>
<main>
    
</main>

<?php
//show footer
INCLUDE_ONCE 'footer.php';

?>

</body>
</html>
