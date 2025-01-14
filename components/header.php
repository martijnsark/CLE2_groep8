<?php 
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
?>

<header>
        <div class="header-content">
            <div class="half-header">
                <h1 class="shabu-title">Shabu Shabu</h1>
                <p>
                    Welkom bij sushi restaurant <strong>SHABU SHABU</strong>! U kunt bij ons onbeperkt sushi eten voor een
                    vaste prijs. Of u nu komt voor een lunch of een diner. Onze chef-koks bereiden altijd de lekkerste sushi
                    met dagverse ingrediënten. Schuif dus heerlijk aan in één van onze sushi restaurants in de buurt of
                    bestel uw sushi eenvoudig online.
                </p>
                <p>
                    <strong>UITBREIDING VAN ONZE ALL-YOU-CAN-EAT AVONDEN!</strong><br>
                    Beste gasten, we hebben geweldig nieuws! Om jullie nog meer te laten genieten van onze heerlijke
                    sushi
                    en
                    andere gerechten is het All-You-Can-Taste diner van maandag t/m donderdag nu de hele avond onbeperkt
                    zitten.
                    (m.u.v. andere arrangementen & feestdagen, informeer bij de vestiging)
                </p>
                <p>
                    We kijken ernaar uit jullie binnenkort te verwelkomen en samen van een ontspannen en smaakvolle
                    avond te
                    genieten.
                </p>
            </div>
            <a class="button-reserveer" id="dropdownBTN" onclick="dropdown()">Reserveer nu!</a>
            <br>
            <div id="dropdownMenu">
                <a href="locations/alphen.php">Alphen a/d Rijn</a>
                <!-- <a href="location.php?location=newyork">New York</a> -->
                <br>
                <a href="locations/amersfoort.php">Amersfoort</a>
                <br>
                <a href="locations/apeldoorn.php">Apeldoorn</a>
                <br>
                <a href="locations/ede.php">Ede</a>
                <br>
                <a href="locations/leiden.php">Leiden</a>
                <br>
                <a href="locations/rotterdam-centrum.php">Rotterdam Centrum</a>
                <br>
                <a href="locations/rotterdam-alexandrium.php">Rotterdam Alexandrium</a>
                <br>
                <a href="locations/zoetermeer.php">Zoetermeer</a>
            </div>

        </div>
    </header>