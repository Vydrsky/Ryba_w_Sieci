<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Serwis Wędkarski" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/main_styles.css" />
    <link rel="stylesheet" href="styles/navigation_styles.css" />
    <link rel="stylesheet" href="styles/profile_styles.css" />
    <link rel="stylesheet" href="fontello/css/fontello.css" />
    <link rel="icon" href="favicon.ico" />
</head>

<body>
    <?php include "includes/header.php"; ?>
    <?php include "includes/menu.php"; ?>
    <main>
        <section>
            <div id="profile-image">
                <img src="images/konkursy-link.jpg" />
            </div>
            <div id="profile-data">
                Twoje Dane: <br><br>
                Imię i Nazwisko: Jan Kowalski<br>
                Pseudonim: TurboRybiarz34<br>
                Adres Email: szczupaki1@gmail.com<br><br>
                Użytkownik<br>
                Ranga: Karaś (314 punktów)<br>
            </div>
            <form method="post" action="index.php?state=profile&edit=1">
                <input type="submit" value="Edytuj Profil"/>
            </form>
        </section>
        <article>
            <h2>Twoje Aukcje</h2>
            <div id="auction-container">
                <div class="auction-item">
                    temp
                </div>
                <div class="auction-item">
                    temp
                </div>
                <div class="auction-item">
                    temp
                </div>
            </div>
            <h2>Twoje Zamówienia</h2>
            <div id="auction-container">
                <div class="auction-item">
                    temp
                </div>
                <div class="auction-item">
                    temp
                </div>
                <div class="auction-item">
                    temp
                </div>
            </div>
            <h2>Konkursy w których uczestniczysz</h2>
            <div id="auction-container">
                <div class="auction-item">
                    temp
                </div>
                <div class="auction-item">
                    temp
                </div>
                <div class="auction-item">
                    temp
                </div>
            </div>
        </article>
    </main>
    <?php
    include "includes/footer.php";
    ?>
</body>

</html>