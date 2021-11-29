<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Serwis Wędkarski" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/main_styles.css" />
    <link rel="stylesheet" href="styles/navigation_styles.css" />
    <link rel="stylesheet" href="styles/galery_styles.css" />
    <link rel="stylesheet" href="fontello/css/fontello.css" />
    <link rel="icon" href="favicon.ico" />
</head>

<body>
   <?php
   include "includes/header.php";
   ?>
  <?php 
  include "includes/menu.php";
  ?>
    <main>
        <article>
            <div id="galery-item">
                <img src="images/galery/bass.jpg">
            </div>
            <div id="galery-item">
            <img src="images/galery/salmon.jpg">
            </div>
            <div id="galery-item">
            <img src="images/galery/carp.jpg">
            </div>
            <div id="galery-item">
            <img src="images/galery/pike.jpg">
            </div>
            <div id="galery-item">
            <img src="images/galery/somethingfish.jpg">
            </div>
            
        </article>
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
  <?php
  include "includes/footer.php";
  ?>
</body>

</html>