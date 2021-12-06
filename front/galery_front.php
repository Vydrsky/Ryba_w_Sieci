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
    <link rel="stylesheet" href="fontellon/css/fontello.css" />
    <link rel="icon" href="favicon.ico" />
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href); //prosty skrypt aby uniemożliwic przesyłanie formularza przez przypdaek z użyciem f5
        }
    </script>
</head>

<body>
    <?php
    include "includes/header.php";
    include "includes/menu.php";
    ?>
    <main>
        <?php
        if (isset($_SESSION['userid'])) {
            echo '<section>' .
                '<div id="add-image-text">' .
                '<p>Witaj ' . $_SESSION['username'] . '</p>Podziel się z nami swoimi zdobyczami wypełniając formularz<br> Inni użytkownicy mogą polubić twoje zdjęcia<br>Dla najlepszych łowców czekają niesamowite nagrody' .
                '</div>' .
                '<fieldset>' .
                '<div id="form-description-container">' .
                'Obrazek:<br>Opis:<br><br><br><br>Waga:<br>' .
                '</div>' .
                '<form method="post" action="index.php?state=galery" enctype="multipart/form-data">' .
                '<input type="file" accept="image/jpeg,image/gif,image/png" name="gallery-image" /><br>' .
                '<textarea name="gallery-description" rows="5">';
            if (isset($_SESSION['gallery-description-input'])) echo $_SESSION['gallery-description-input'];
            echo '</textarea><br>' .
                '<input type="number" name="gallery-weight" value="';
            if (isset($_SESSION['gallery-weight-input'])) echo $_SESSION['gallery-weight-input'];
            echo '" min="0" step="0.01" />kg<br>';
            if (isset($_SESSION['galery-image-error']))
                echo '<span style="color:red;">' . $_SESSION['galery-image-error'] . "</span><br>";
            if (isset($_SESSION['galery-description-error']))
                echo '<span style="color:red;">' . $_SESSION['galery-description-error'] . "</span><br>";
            if (isset($_SESSION['galery-weight-error']))
                echo '<span style="color:red;">' . $_SESSION['galery-weight-error'] . "</span><br>";
            echo '<input type="submit" value="Prześlij">' .
                '</form>' .
                '</fieldset>' .
                '</section>';
        }
        ?>
        <article>
            <?php
            foreach ($_SESSION['gallery_data'] as $item) {
                echo
                '<div class="galery-item">' .
                    '<img src="' . $item['zdjecie'] . '">' .
                    '<div class="galery-item-overlay">' .
                    $item['opis'] . '<br><br>Waga: ' . $item['waga'] . 'kg<br><br>Polubienia: ' . $item['polubienia'] . '<br>';
                if (isset($_SESSION['userid'])) {
                    $likedFlag = false;
                    foreach ($_SESSION['likes'] as $row) {
                        if ($row['userid'] == $_SESSION['userid'] && $row['postid'] == $item['id']) {
                            $likedFlag = true;
                        }
                    }
                    if (!$likedFlag) {
                        echo '<br><span style="color:lightblue;"><a href="index.php?state=galery&like=' . $item['id'] . '">Lubie To!' . '</a></span>';
                    } else {
                        echo '<br><span style="color:lightgreen;">Już lubisz ten obrazek :)</span>';
                    }
                }
                echo
                '</div>' .
                    '</div>';
            }
            ?>
        </article>
    </main>
    <?php
    include "includes/footer.php";
    ?>
</body>

</html>