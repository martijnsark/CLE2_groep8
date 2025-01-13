<?php

INCLUDE_ONCE 'header.php';


?>

<body>
<header>
    <div class="center-container">
        <div class="half-container">
            <h1 class="shabu-title">Sushi Restaurant</h1>
            <h1 class="shabu-title">Den Haag</h1>
            <p>Heeft u zin in heerlijke verse sushi? Dan bent u bij <strong>SHABU SHABU</strong> in Den Haag aan het
                juiste
                adres. Bij
                ons sushi restaurant in Den Haag kunt u genieten van de lekkerste sushi en warme gerechten van de
                grill. In ons all you can eat restaurant dineert u samen in Aziatische sferen. Lees snel verder en
                ontdek
                ons
                unieke all you can taste menu.
            </p>
        </div>
        <div class="half-container">
            <section>
                <form action="store.php" method="POST">
                    <div class="formfield">
                        <div class="stack">
                            <label for="first_name">Voornaam*</label>
                            <input type="text" name="first_name" id="first_name" placeholder="First name" required>
                        </div>
                        <div class="stack">
                            <label for="last_name">Achternaam*</label>
                            <input type="text" name="last_name" id="last_name" placeholder="Last name" required>
                        </div>
                    </div>

                    <div class="stack">
                        <label for="email">Email*</label>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>

                    <div class="stack">
                        <label for="subject">Onderwerp*</label>
                        <select id="subject" name="subject" required>
                            <option value="" disabled selected>Kies een onderwerp</option>
                            <option value="question">Vraag</option>
                            <option value="Vacature">Vacature</option>
                            <option value="question">Question</option>
                        </select>
                    </div>

                    <div class="stack">
                        <label for="message">Schrijf hier je bericht*</label>
                        <textarea id="message" name="message" rows="15" cols="83" required></textarea>
                    </div>

                    <div class="stack">
                        <label for="category">Subscribe to Newsletter?*</label>
                        <div class="button-container">
                            <div class="buttons">
                                <input type="radio" name="radio" id="yes" required>
                                <label for="yes">Yes</label>
                            </div>
                            <div class="buttons">
                                <input type="radio" id="no" name="radio">
                                <label for="no">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="formfield-checkbox">
                        <input type="checkbox" name="tac" id="tac" required>
                        <label for="tac">I agree to the Terms and Conditions*</label>
                    </div>

                    <button type="submit">Verzenden</button>

                </form>
            </section>
        </div>
    </div>
</header>
<?php
INCLUDE_ONCE 'footer.php';

?>
</body>
</html>

