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
        <a href="reservation.html">Reserveren</a>
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
                <form>
                    <div class="stack">
                        <label for="choice">Uw keuze*</label>
                        <div class="button-container">
                            <div class="buttons">
                                <input type="radio" name="menu" id="menu" required>
                                <label for="lunch">Lunch</label>
                            </div>
                            <div class="buttons">
                                <input type="radio" id="menu" name="menu">
                                <label for="diner">Diner</label>
                            </div>

                        </div>
                    </div>

                    <div class="stack">
                        <label for="amount">Aantal personen:*</label>
                        <select id="amount" name="amount" required>
                            <option value="" disabled selected>0</option>
                            <option value="option">2</option>
                            <option value="option">3</option>
                            <option value="option">4</option>
                            <option value="option">5</option>
                            <option value="option">6</option>
                        </select>
                    </div>

                    <button type="next">Volgende</button>
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