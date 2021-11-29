<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Serwis Wędkarski" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/main_styles.css" />
    <link rel="stylesheet" href="styles/navigation_styles.css" />
    <link rel="stylesheet" href="styles/concrete_news_styles.css" />
    <link rel="stylesheet" href="fontello/css/fontello.css" />
    <link rel="icon" href="favicon.ico" />
</head>

<body>
    <?php include "includes/header.php"; ?>
    <?php include "includes/menu.php"; ?>
    <main>
        <section>
        <?php 
            
            $concreteNews = unserialize($_SESSION['concreteNews']);
                
            echo "<div id='item'>";
                echo "<div id='item-title'>" . $concreteNews->getTitle() . "</div>";
                echo "<div id='item-image'> <img src='images/news/" . $concreteNews->getImage() . "'/> </div>";
                echo "<div id='autor-info'>Opublikowano " . $concreteNews->getPublicationDate() . " przez " . $_SESSION['authorName'] . "</div>";
                echo "<div id='item-content'>" . $concreteNews->getDescription(). "</div>";    
            echo "</div>";
        ?>
        </section>
    </main>
    <?php
    include "includes/footer.php";
    ?>
</body>

</html>