<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Serwis Wędkarski" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/main_styles.css" />
    <link rel="stylesheet" href="styles/navigation_styles.css" />
    <link rel="stylesheet" href="styles/add_to_gallery_styles.css" />
    <link rel="stylesheet" href="fontello/css/fontello.css" />
    <link rel="icon" href="favicon.ico" />
</head>

<body>
    <?php include "includes/header.php"; ?>
    <main>
        <section>
            <div id="item">
                <div id="item-title">
                    Dodanie do galerii
                </div>
                <div id="item-content">
                <form method="post" action="index.php?state=add_to_gallery" enctype="multipart/form-data">
                    Zdjęcie </br>
                    <input type="file" name="image" accept="image/png, image/jpg, image/jpeg"/> </br> </br> 
                    Opis </br>
                    <textarea name="description">Wpisz opis.</textarea> </br> </br>
                    Waga zdobyczy </br>
                    <input type="number" name="weight" step="1" min="0" /> </br> </br>                  
                    <input type="submit" value="Dodaj zdjęcie"/>
                </form>
                <?php if(isset($_SESSION['errorImage'])){echo $_SESSION['errorImage']."</br>";}
                if(isset($_SESSION['errorDescription'])){echo $_SESSION['errorDescription']."</br>";} ?>
                </div>
            </div>
        </section>
    </main>
    <?php include "includes/footer.php"; ?>
</body>

</html>
