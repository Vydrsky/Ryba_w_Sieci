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
    include "includes/menu.php";
    ?>
    <main>
        <section>
            <div id="add-image-text">
                <p>Witaj <?php echo $_SESSION['username'];?></p>Podziel się z nami swoimi zdobyczami wypełniając formularz<br> Inni użytkownicy mogą polubić twoje zdjęcia<br>Dla najlepszych łowców czekają niesamowite nagrody
            </div>
        <fieldset>
            <div id ="form-description-container">
                Obrazek:<br>Opis:<br><br><br><br>Waga:<br>
            </div>
            <form method="post" action="">
                <input type="file" name="gallery-image" accept="image/png,image/jpeg"/><br>
                <textarea name="gallery-description" rows="5"><?php if (isset($_SESSION['gallery-description-input'])) echo $_SESSION['gallery-description-input']; ?></textarea><br>
                <input type="number" name="gallery-weight" value="<?php if (isset($_SESSION['gallery-weight-input'])) echo $_SESSION['gallery-weight-input']; ?>" min='0' step='0.01'/>kg<br>
                <?php
                if (isset($_SESSION['galery-image-error']))
                    echo '<span style="color:red;">'.$_SESSION['galery-image-error']."</span><br>";
                    if (isset($_SESSION['galery-description-error']))
                    echo '<span style="color:red;">'.$_SESSION['galery-description-error']."</span><br>";
                    if (isset($_SESSION['galery-weight-error']))
                    echo '<span style="color:red;">'.$_SESSION['galery-weight-error']."</span><br>";
                ?>
                <input type="submit" value="Prześlij">
            </form>
            </fieldset>
        </section>
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
    <?php
    include "includes/footer.php";
    ?>
</body>

</html>