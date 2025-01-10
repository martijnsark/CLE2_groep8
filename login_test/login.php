<?php

INCLUDE_ONCE 'header.php';

?>


<header>
    <div class="header-content">
        <section class ="login-form">
            <h2>Log In</h2>
            <form action="includes/login.inc.php" method="POST"> 
                <input type="text" name="name" placeholder="Username/email...">
                <input type="password" name="pwd" placeholder="Password...">
                <button type="submit" name="sumbit">Log In<button>
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
