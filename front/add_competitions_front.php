<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Serwis Wędkarski" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/main_styles.css" />
    <link rel="stylesheet" href="styles/navigation_styles.css" />
    <link rel="stylesheet" href="styles/add_competitions_styles.css" />
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
                    Dodanie zawodów
                </div>
                <div id="item-content">
                <form method="post" action="index.php?state=add_competitions">
                    Tytuł</br>
                    <input type="text" name="title"> </br> </br>
                    Data <br />
                    <input type="date" name="date" required> <br /><br />
                    Łowisko </br>
                    <input type="text" name="fishery"> </br> </br> 
                    Godzina startu </br>
                    <input type="time" name="start_time" required > </br> </br>
                    Typ </br>
                    <input type="text" name="type"> </br> </br> 
                    <input type="submit" value="Dodaj zawody"/>
                </form>
                <?php if(isset($_SESSION['errorTitle'])){echo $_SESSION['errorTitle']."</br>";}
                if(isset($_SESSION['errorFishery'])){echo $_SESSION['errorFishery']."</br>";}
                if(isset($_SESSION['errorType'])){echo $_SESSION['errorType']."</br>";} ?>
                </div>
                <div id="item-content">
                <div id="item-title">
                    Edycja zawodów
                </div> 
                <form method="post" action="index.php?state=add_competitions&edit=1">
                    ID zawodów</br>
                    <input type="text" name="edit-id"> </br> </br>
                    Tytuł</br>
                    <input type="text" name="edit-title"> </br> </br>
                    Data <br />
                    <input type="date" name="edit-date" required> <br /><br />
                    Łowisko </br>
                    <input type="text" name="edit-fishery"> </br> </br> 
                    Godzina startu </br>
                    <input type="time" name="edit-start_time" required > </br> </br>
                    Typ </br>
                    <input type="text" name="edit-type"> </br> </br> 
                    <input type="submit" value="Edytuj zawody"/>
                </form>
                </div>
            </div>
        </section>
    </main>
    <?php include "includes/footer.php"; ?>
</body>

</html>
