<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.cdnfonts.com/css/imagination-station" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/open-sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav>
    <div class="left-column">
        <img src="images/Shabu_Shabu_Logo.png" alt="ShabuShabu Logo">
    </div>
    <div class="right-column">
        <a href="index.html">Home</a>
        <a href="#">Over ons</a>
        <a href="form.html">Reserveren</a>
        <a href="#">Contact</a>
    </div>
</nav>
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
                            <label for="name">Voornaam*</label>
                            <input type="text" name="name" id="name" placeholder="First name" required>
                        </div>
                        <div class="stack">
                            <label for="name">Achternaam*</label>
                            <input type="text" name="sirName" id="name" placeholder="Last name" required>
                        </div>
                    </div>

                    <div class="stack">
                        <label for="email">E-mail*</label>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>

                    <div class="stack">
                        <label for="question">Opmerkingen</label>
                        <input type="text" name="question" id="question">
                    </div>

                    <div class="formfield-checkbox">
                        <input type="checkbox" name="tac" id="tac" required>
                        <label for="tac">Ik aanvaard de privacyvoorwaarden*</label>
                    </div>

                    <button type="submit">Bevestig</button>

                </form>
            </section>
        </div>
    </div>
</header>
<footer>
    <div class="foot-icons">
        <a href="https://www.facebook.com/shabushabu.nl/?locale=nl_NL" class="fa fa-facebook"></a>
        <a href="https://www.instagram.com/restaurant_shabushabu/?hl=nl" class="fa fa-instagram"></a>
    </div>
</footer>
</body>
</html>