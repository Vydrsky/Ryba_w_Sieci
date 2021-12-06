<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Serwis Wędkarski" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/main_styles.css" />
    <link rel="stylesheet" href="styles/navigation_styles.css" />
    <link rel="stylesheet" href="styles/add_news_styles.css" />
    <link rel="stylesheet" href="fontellon/css/fontello.css" />
    <link rel="icon" href="favicon.ico" />
</head>

<body>
    <?php include "includes/header.php"; ?>
    <?php include "includes/menu.php"; ?>
    <main>
        <section>
            <div id="item">
                <div id="item-title">
                    Dodanie ogłoszenia
                </div>
                <div id="item-content">
                <form method="post" action="index.php?state=add_news" enctype="multipart/form-data">
                    Tytuł </br>
                    <input type="text" name="title" /> </br> </br>
                    Treść </br>
                    <textarea name="description">Wpisz treść.</textarea> </br> </br>
                    Zdjęcie </br>
                    <input type="file" name="image" accept="image/png, image/jpg, image/jpeg"/> </br> </br>
                    <input type="submit" value="Dodaj ogłoszenie"/>
                </form>
                <?php if(isset($_SESSION['errorDescription'])){echo $_SESSION['errorDescription']."</br>";}
                if(isset($_SESSION['errorTitle'])){echo $_SESSION['errorTitle']."</br>";}
                if(isset($_SESSION['errorImage'])){echo $_SESSION['errorImage']."</br>";} ?>
                </div>
            </div>
        </section>
    </main>
    <?php include "includes/footer.php"; ?>
</body>

</html>
