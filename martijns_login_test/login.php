<?php

INCLUDE_ONCE 'header.php';

?>


<header>
    <div class="header-content">
        <section class ="login-form">
        <?php 
            if (isset($_GET["error"])) {
                if ($_GET["error"] == 'emptyinput') {
                    echo"<p>Niet alle nodige informatie was gegeven!<p>";
                }
                else if ($_GET["error"] == 'wronglogin') {
                    echo"<p>incorrect login details!<p>";
                }
            }
            ?>
            <h2>Log In</h2>
            <form action="includes/login.inc.php" method="POST"> 
                <input type="text" name="uid" placeholder="Username/email...">
                <input type="password" name="pwd" placeholder="Password...">
                <button type="submit" name="submit">Log In</button>
            </form>
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
