<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Serwis Wędkarski" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/main_styles.css" />
    <link rel="stylesheet" href="styles/navigation_styles.css" />
    <link rel="stylesheet" href="styles/news_styles.css" />
    <link rel="stylesheet" href="fontellon/css/fontello.css" />
    <link rel="icon" href="favicon.ico" />
</head>

<body>
    <?php include "includes/header.php"; ?>
    <?php include "includes/menu.php"; ?>
    <main>
        <section>
            <?php

            for ($i = 0; $i < $_SESSION['newsCount']; $i++) {
                $news = unserialize($_SESSION['news'][$i]);

                echo "<div id='item'>";
                echo "<div id='item-image'> <img src='" . $news->getImage() . "'/> </div>";
                echo "<div id='item-content'>";
                echo "<div id='item-title'>" . $news->getTitle() . "</div>";
                echo "<div id='item-info'>" . substr($news->getDescription(),0,242) . '...' . "</div>";
                echo "<div id='item-forwarding'> <a href='index.php?state=concrete_news&id=" . $_SESSION['newsId'][$i] . "'>Czytaj więcej...</a> </div>";
                echo  "</div>";
                echo "</div>";
            }
            ?>
        </section>
    </main>
    <?php
    include "includes/footer.php";
    ?>
</body>

</html>