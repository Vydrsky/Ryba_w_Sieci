<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Serwis Wędkarski" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/main_styles.css" />
    <link rel="stylesheet" href="styles/navigation_styles.css" />
    <link rel="stylesheet" href="styles/shop_styles.css" />
    <link rel="stylesheet" href="fontello/css/fontello.css" />
    <link rel="icon" href="favicon.ico" />
</head>

<body>
    <header>
        <div class="inline-header-container-left">
            <a href="index.php?state=start">
                <div id="header-image">
                    <img src="images/logo.png" />
                </div>
            </a>
            <div id="header-title">RYBA-W-SIECI</div>
        </div>
        <div class="inline-header-container-right">
            <div class="header-link">Zaloguj się</div>
            <div class="header-link">Stwórz Konto</div>
            <div class="header-link">O Nas</div>
        </div>
    </header>
    <nav>
        <ul>
            <li>Sklep</li>
            <li>Sprzęt Używany</li>
            <li>Galeria</li>
            <li>Newsy</li>
        </ul>
    </nav>
    <main>
        <aside>
            <div id="filter-form-container">
                <form method="post" action="">
                    <p>Sprzęt Rybacki:</p>
                    <input type="checkbox" name="rods-checkbox" /> Wędki<br>
                    <input type="checkbox" name="lines-checkbox" /> Żyłki<br>
                    <input type="checkbox" name="baits-checkbox" /> Przynęty<br>
                    <input type="checkbox" name="nets-checkbox" /> Sieci<br>
                    <input type="checkbox" name="floats-checkbox" /> Spławiki<br>
                    <input type="checkbox" name="reels-checkbox" /> Kołowrotki<br>
                    <p>Akcesoria:</p>
                    <input type="checkbox" name="clothes-checkbox" /> Ubrania<br>
                    <input type="checkbox" name="shoes-checkbox" /> Buty<br>
                    <input type="checkbox" name="seats-checkbox" /> Siedziska<br>
                    <input type="checkbox" name="tents-checkbox" /> Namioty<br>
                    <input type="checkbox" name="bags-checkbox" /> Torby i Plecaki<br>
                    <input type="checkbox" name="landing-nets-checkbox" /> Podbieraki<br>
                    <p>Cena:</p>
                    <input type="number" name="min-cost" min="0" max="999999" /> - <input type="number" name="max-cost" min="0" max="999999" /><br>
                    </p>Opcje Dostawy:</p>
                    <input type="checkbox" name="free-delivery-checkbox" /> Darmowa Dostawa<br>
                    <input type="checkbox" name="poland-delivery-checkbox" /> Dostawa z Polski<br>
                    <input type="checkbox" name="poland-delivery-checkbox" /> Dostawa na jutro<br>
                    <input type="submit" value="Potwierdź" />
                </form>
            </div>
        </aside>
        <section>
            <div id="item">
                <div id="item-image">
                    <img src="images/logo.png" />
                </div>
                <div id="item-content">
                    <div id="item-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sed velit vitae libero dignissim ornare nec et arcu. Sed enim nibh, aliquam sit amet lacinia ac, fermentum ut est. Praesent lacinia sagittis urna id semper. Mauris eget urna egestas, vulputate enim eget, ullamcorper ex. Cras quis libero congue ipsum accumsan dignissim. Aliquam erat volutpat. Integer a urna pharetra, posuere quam sed, volutpat turpis. Mauris at ultricies leo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla efficitur sapien a dui blandit, id maximus urna porttitor. Mauris id mi vitae libero commodo vehicula id ac dolor.
                    </div>
                    <div id="item-info">
                        Lorem ipsum dolor sit amet, id maximus urna porttitor. Mauris id mi vitae libero commodo vehicula id ac dolor.
                    </div>
                    <div id="add-to-cart">
                        Dodaj do Koszyka
                    </div>
                </div>
            </div>
            <div id="item">
                sdfgdsfgdsg
            </div>
            <div id="item">
                sdfgdsfgdsg
            </div>
            <div id="item">
                sdfgdsfgdsg
            </div>
            <div id="item">
                sdfgdsfgdsg
            </div>
        </section>
    </main>
    <div id="social-media-container">
        <div id="facebook">
            <i class="icon-facebook-squared"></i>
        </div>
        <div id="twitter">
            <i class="icon-twitter"></i>
        </div>
        <div id="instagram">
            <i class="icon-instagram"></i>
        </div>
        <div id="google">
            <i class="icon-gplus"></i>
        </div>
    </div>
    <footer>
        Copyright &copy; 2020 - 2021 All rights reserved
    </footer>
</body>

</html>