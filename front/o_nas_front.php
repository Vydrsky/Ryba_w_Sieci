<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O nas</title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Serwis Wędkarski" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/main_styles.css" />
    <link rel="stylesheet" href="styles/start_styles.css" />
    <link rel="stylesheet" href="fontello/css/fontello.css" />
    <link rel="icon" href="favicon.ico" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        #container h1 {
            margin-left: 50;
            text-align: center;
        }


        .container {
            width: 600px;
            text-align: center;

        }

        #carouselExampleControls {
            text-align: center;
            vertical-align: middle;
        }

        #carouselExampleControls.carousel.slide {

            height: 400px;
            width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
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
            <a href="index.php?state=o_nas">
                <div class="header-link">O Nas</div>
            </a>
        </div>
    </header>
    <summary>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus iaculis quam quis ligula laoreet porta. Phasellus aliquet vel orci a suscipit. Vivamus aliquet, urna vitae dapibus condimentum, velit erat bibendum velit, nec dignissim libero metus et arcu. Nulla ut risus id massa imperdiet venenatis. Fusce hendrerit pretium pulvinar. Quisque sodales tincidunt arcu, ac gravida mauris vehicula sodales. Proin hendrerit egestas tortor nec rhoncus. Etiam sit amet dictum eros. Quisque sed risus id nibh interdum fringilla et et metus. Donec lorem augue, hendrerit nec ligula id, scelerisque placerat elit. Ut at nisi elementum, volutpat metus id, laoreet nunc. Aenean facilisis cursus metus sit amet laoreet. Donec bibendum, lacus non euismod vestibulum, orci velit cursus orci, sed mattis metus turpis eget neque.</p>
    </summary>
    <main>
        <div id="container">
            <h1>O nas</h1>






            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2547.034268867592!2d18.789220815929138!3d50.3286119040172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47112ded8bad65af%3A0x92bd7b7e54554b4c!2sZabrze!5e0!3m2!1spl!2spl!4v1637592958532!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div id="addr">
            Champions SUPLE SHOP Ernest Bijak

            ADRES SKLEPU:
            ul. Mickiewicza 27
            15-213 Białystok

            GODZINY OTWARCIA:
            Wtorek-Piątek: 10:30-17:30
            Sobota: 10:00-15:00
            </div>        
                    
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-30 " src="photos/pobrane.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-30 " src="photos/pobrane3.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-30 " src="photos/pobrane2.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>





    </main>


    <div id="social-media-container">
        <a href="https://www.facebook.com/">
            <div id="facebook">
                <i class="icon-facebook-squared"></i>
            </div>
        </a>
        <a href="https://twitter.com/home?lang=pl">
            <div id="twitter">
                <i class="icon-twitter"></i>
            </div>
        </a>
        <a href="https://www.instagram.com/">
            <div id="instagram">
                <i class="icon-instagram"></i>
            </div>
        </a>
        <a href="https://myaccount.google.com/intro/profile">
            <div id="google">
                <i class="icon-gplus"></i>
            </div>
        </a>
    </div>
    <footer>
        Copyright &copy; 2020 - 2021 All rights reserved
    </footer>
</body>

</html>