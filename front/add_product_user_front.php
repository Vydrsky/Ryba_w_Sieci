<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Serwis Wędkarski" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/main_styles.css" />
    <link rel="stylesheet" href="styles/navigation_styles.css" />
    <link rel="stylesheet" href="styles/add_product_styles.css" />
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
                    Dodanie aukcji
                </div>
                <div id="item-content">
                <form method="post" action="index.php?state=add_product_user" enctype="multipart/form-data">
                    Nazwa przedmiotu </br>
                    <input type="text" name="name" /> </br> </br>
                    Typ </br>
                    <input type="text" name="type" /> </br> </br>
                    Stan </br>
                    <input type="text" name="state" /> </br> </br>
                    Rok produkcji </br>
                    <input type="number" name="production-year" step="1" min="0" /> </br> </br>
                    Cena </br>
                    <input type="number" name="prize" step="0.01" min="0" /> </br> </br>
                    Opis </br>
                    <textarea name="description">Wpisz opis.</textarea> </br> </br>
                    Zdjęcie </br>
                    <input type="file" name="image" accept="image/png, image/jpg, image/jpeg"/> </br> </br> 
                    <input type="submit" value="Dodaj produkt"/>
                </form>
                <?php if(isset($_SESSION['errorName'])){echo $_SESSION['errorName']."</br>";}
                if(isset($_SESSION['errorType'])){echo $_SESSION['errorType']."</br>";}
                if(isset($_SESSION['errorImage'])){echo $_SESSION['errorImage']."</br>";}
                if(isset($_SESSION['errorState'])){echo $_SESSION['errorState']."</br>";} 
                if(isset($_SESSION['errorDescription'])){echo $_SESSION['errorDescription']."</br>";} ?>
                </div>
            </div>
        </section>
    </main>
    <?php include "includes/footer.php"; ?>
</body>

</html>
