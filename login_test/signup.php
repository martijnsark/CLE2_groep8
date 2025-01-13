<?php

INCLUDE_ONCE 'header.php';

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
