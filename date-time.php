<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Date and Time</title>
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
                    <!--                <div class="calendar">-->
                    <div class="month">
                        <ul>
                            <li class="prev">&#10094;</li>
                            <li class="next">&#10095;</li>
                            <li>August<br><span style="font-size:18px">2021</span></li>
                        </ul>
                    </div>
                    <ul class="weekdays">
                        <li>Mo</li>
                        <li>Tu</li>
                        <li>We</li>
                        <li>Th</li>
                        <li>Fr</li>
                        <li>Sa</li>
                        <li>Su</li>
                    </ul>

                    <ul class="days">
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                        <li>6</li>
                        <li>7</li>
                        <li>8</li>
                        <li>9</li>
                        <li><span class="active">10</span></li>
                        <li>11</li>
                        <li>12</li>
                        <li>13</li>
                        <li>14</li>
                        <li>15</li>
                        <li>16</li>
                        <li>17</li>
                        <li>18</li>
                        <li>19</li>
                        <li>20</li>
                        <li>21</li>
                        <li>22</li>
                        <li>23</li>
                        <li>24</li>
                        <li>25</li>
                        <li>26</li>
                        <li>27</li>
                        <li>28</li>
                        <li>29</li>
                        <li>30</li>
                        <li>31</li>
                    </ul>
                    <!--                </div>-->

                    <div class="stack">
                        <label for="times-lunch">Lunch tijden:*</label>
                        <select id="times-lunch" name="times" required>
                            <option value="" disabled selected>Tijdstip</option>
                            <option value="lunch">12:30</option>
                            <option value="lunch">13:00</option>
                            <option value="lunch">13:30</option>
                            <option value="lunch">14:00</option>
                            <option value="lunch">14:30</option>
                        </select>
                    </div>

                    <div class="stack">
                        <label for="times-diner">Diner tijden:*</label>
                        <select id="times-diner" name="times" required>
                            <option value="" disabled selected>Tijdstip</option>
                            <option value="diner">16:00</option>
                            <option value="diner">16:30</option>
                            <option value="diner">17:00</option>
                            <option value="diner">17:30</option>
                            <option value="diner">18:00</option>
                            <option value="diner">18:30</option>
                            <option value="diner">19:00</option>
                            <option value="diner">19:30</option>
                            <option value="diner">20:00</option>
                        </select>
                    </div>

                    <div class="buttons">
                        <button type="button">Vorige</button>
                        <button type="button">Volgende</button>
                    </div>

                </form>
            </section>
        </div>
    </div>
</header>
<main>

</main>
<footer>
    <div class="foot-icons">
        <a href="https://www.facebook.com/shabushabu.nl/?locale=nl_NL" class="fa fa-facebook"></a>
        <a href="https://www.instagram.com/restaurant_shabushabu/?hl=nl" class="fa fa-instagram"></a>
    </div>
</footer>
</body>
</html>