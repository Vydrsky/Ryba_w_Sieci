<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Serwis Wędkarski" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/main_styles.css" />
    <link rel="stylesheet" href="styles/navigation_styles.css" />
    <link rel="stylesheet" href="styles/register_styles.css" />
    <link rel="stylesheet" href="fontello/css/fontello.css" />
    <link rel="icon" href="favicon.ico" />
</head>

<body>
    <?php
    include "includes/header.php";
    ?>
    <main>
        <section>
            <div id="item">
                <div id="item-title">
                    <h1>Rejestracja</h1>
                </div>
                <div id="item-content">
                    <form method="post" action="index.php?state=register">
                        <div id="labels">
                            <div class="label">
                                E-mail<br />
                                <input type="text" name="email" required> <br /><br />
                            </div>
                            <div class="label">
                                Potwierdź adres E-mail:<br />
                                <input type="text" name="email2" required><br /><br />
                            </div>
                            <div class="label">
                                Imię<br />
                                <input type="text" name="name" required> <br /><br />
                            </div>
                            <div class="label">
                                Nazwisko<br />
                                <input type="text" name="surname" required><br /><br />
                            </div>
                            <div class="label">
                                Login<br />
                                <input type="text" name="username" required> <br /><br />
                            </div>
                            <div class="label">
                                Hasło<br />
                                <input type="password" name="pass" required><br /><br />
                            </div>
                            <div class="label">
                                Potwierdź hasło<br />
                                <input type="password" name="pass2" required> <br /><br />
                            </div>
                            <div class="label">
                                Data Urodzenia<br />
                                <input type="date" name="birthDate" required><br /><br />
                            </div>
                            <input type="submit" value="Utwórz konto" />
                        </div>
                    </form>
                    <?php if (isset($_SESSION['emailError'])) {
                        echo "<p color='red'>" . $_SESSION['emailError'] . "</p>";
                    }
                    if (isset($_SESSION['usernameError'])) {
                        echo "<p color='red'>" . $_SESSION['usernameError'] . "</p>";
                    }
                    if (isset($_SESSION['passError'])) {
                        echo "<p color='red'>" . $_SESSION['passError'] . "</p>";
                    }
                    if (isset($_SESSION['birthDateError'])) {
                        echo "<p color='red'>" . $_SESSION['birthDateError'] . "</p>";
                    } ?>
                </div>
            </div>
        </section>
    </main>

    <?php
    include "includes/footer.php";
    ?>

</body>

</html>