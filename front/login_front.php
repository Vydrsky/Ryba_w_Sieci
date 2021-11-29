

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Serwis Wędkarski" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/main_styles.css" />
    <link rel="stylesheet" href="styles/navigation_styles.css" />
    <link rel="stylesheet" href="styles/login_styles.css" />
    <link rel="stylesheet" href="fontello/css/fontello.css" />
    <link rel="icon" href="favicon.ico" />
</head>

<body>
    <?php include "includes/header.php"; ?>
    <main>
        <section>
            <div id="item">
                <div id="item-title">
                    Logowanie
                </div>
                <div id="item-content">
                <form method="post" action="" enctype="multipart/form-data">
                Login </br>  
                <input type="text"  name="name" value=<?php if (isset($_SESSION['inputName'])) echo $_SESSION['inputName']; ?>> <br /> </br>
                    Hasło </br>
                    <input type="password"  name="pass"><br />
                    <input type="submit" class="btn" value="zaloguj" />
                    
                </form>
                <?php
    if (isset($_SESSION['nameError'])) {
        echo "<span style='color:red;'>" . $_SESSION['nameError'] . "</span><br>";
    }
    if (isset($_SESSION['passError'])) {
        echo "<span style='color:red;'>" . $_SESSION['passError'] . "</span><br>";
    }
    if (isset($_SESSION['ageError'])) {
        echo "<span style='color:red;'>" . $_SESSION['ageError'] . "</span><br>";
    }

    ?>
                </div>
            </div>
        </section>
    </main>
    <?php include "includes/footer.php"; ?>
</body>

</html>











