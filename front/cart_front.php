<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Serwis Wędkarski" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/main_styles.css" />
    <link rel="stylesheet" href="styles/navigation_styles.css" />
    <link rel="stylesheet" href="styles/cart_styles.css" />
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
        <section>
            <div id="item">
                <div id="item-image">
                    <img src="images/logo.png" />
                </div>
                <div id="item-content">
                    <div id="item-info">
                        Opis
                    </div>
                    <div id="item-count">
                        <form method="post" action="">
                            <input type="number" name="selected-count-1" min="1" max="10" value="1" /> </br> 
                            <input type="submit" value="Zmień"/>
                        </form>
                    </div>
                    <div id="item-prize">
                        17,99zł
                    </div>
                    <div id="item-trash">
                        <a href="index.php?state=start">  
                        <img src="images/trash.png" />
                        </a>
                    </div>                          
                </div>
            </div>
            <div id="item">
                <div id="item-image">
                    <img src="images/logo.png" />
                </div>
                <div id="item-content">
                    <div id="item-info">
                        Opis Opis Opis Opis Opis Opis Opis Opis Opis Opis Opis Opis Opis Opis Opis Opis Opis Opis Opis Opis Opis Opis Opis Opis Opis Opis
                    </div>
                    <div id="item-count">
                        <form method="post" action="">
                            <input type="number" name="selected-count-2" min="1" max="10" value="1" /> </br>
                            <input type="submit" value="Zmień"/>
                        </form>
                    </div>
                    <div id="item-prize">
                        42,33zł
                    </div>
                    <div id="item-trash">
                        <a href="index.php?state=start">  
                            <img src="images/trash.png" />
                        </a>
                    </div>
                </div>
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