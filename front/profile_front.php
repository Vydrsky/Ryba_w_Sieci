<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Serwis Wędkarski" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/main_styles.css" />
    <link rel="stylesheet" href="styles/navigation_styles.css" />
    <link rel="stylesheet" href="styles/profile_styles.css" />
    <link rel="stylesheet" href="fontellon/css/fontello.css" />
    <link rel="icon" href="favicon.ico" />
</head>

<body>
    <?php include "includes/header.php"; ?>
    <?php include "includes/menu.php"; ?>
    <main>
        <section>
            <div id="profile-image">
                <?php
                $user = $_SESSION['profile_user_data'];
                echo '<img src="' . $user->getImage() . '" />'
                ?>
            </div>
            <div id="profile-data">
                <?php
                echo "Twoje Dane: <br><br>";
                echo "Imię i Nazwisko: " . $user->getName() . " " . $user->getSurname() . "<br>";
                echo "Login: " . $user->getLogin() . "<br>";
                echo "Adres Email: " . $user->getEmail() . "<br><br>";
                echo "Uprawnienia: " . $user->getPermission() . "<br>";
                echo "Ranga: " . $user->getRank() . " (" . $user->getPoints() . " punktów)" . "<br>";
                ?>
            </div>
            <?php
            if (!isset($_GET['edit'])) {
                echo '<form method="post" action="index.php?state=profile&edit=1">';
                echo '<input type="submit" value="Edytuj Profil" />';
                echo '</form>';
            } else {
                echo "<fieldset>";
                echo "<div id='form-container'>";
                echo "<div id='edit-form'>Imię: <br>Nazwisko: <br>Login: <br>Email: <br>Potwierdź Hasło: </div>";
                echo '<form method="post" action="index.php?state=profile&edit=2">';
                echo "<input type='text' name='new_name' value=";
                if (isset($_SESSION['profile_input_name']))
                    echo $_SESSION['profile_input_name'];
                else
                    echo $user->getName();
                echo "><br>";
                echo "<input type='text' name='new_surname'value=";
                if (isset($_SESSION['profile_input_surname']))
                    echo $_SESSION['profile_input_surname'];
                else
                    echo $user->getSurname();
                echo "><br>";
                echo "<input type='text' name='new_login'value=";
                if (isset($_SESSION['profile_input_login']))
                    echo $_SESSION['profile_input_login'];
                else
                    echo $user->getLogin();
                echo "><br>";
                echo "<input type='text' name='new_email'value=";
                if (isset($_SESSION['profile_input_email']))
                    echo $_SESSION['profile_input_email'];
                else
                    echo $user->getEmail();
                echo "><br>";
                echo "<input type='password' name='confirm_password'><br><br>";

                echo '<input type="submit" value="Zmień dane" /><br>';
                if (isset($_SESSION['new_name_error']))
                    echo "<span style='color:red;'>" . $_SESSION['new_name_error'] . "</span><br>";
                if (isset($_SESSION['new_email_error']))
                    echo "<span style='color:red;'>" . $_SESSION['new_email_error'] . "</span><br>";
                if (isset($_SESSION['password_confirm_error']))
                    echo "<span style='color:red;'>" . $_SESSION['password_confirm_error'] . "</span><br>";
                echo '</form>';
                echo "</div>";
                echo "</fieldset>";
            }
            echo
            '<div id="logout-container">' .
                '<a href="index.php?state=logout"><button>Wyloguj się</button></a>' .
                '</div>';
            ?>
        </section>
        <article>
            <h2>Twoje Aukcje</h2>
            <div id="auction-container">
                <?php
                foreach ($_SESSION['profile_auction_data'] as $offer) {
                    echo
                    '<div class="auction-item">' .
                        "<div class='auction-item-image'>" .
                        '<img src="' . $offer->getImage() . '"/>' .
                        "</div>" .
                        "<div class='auction-item-description'>" .
                        $offer->getDescription() . '<br><br>Stan: '.$offer->getState().'<br>Typ: '.$offer->getType().'<br>Cena: '.$offer->getPrice().
                        "</div>" .
                            "<div class='auction-item-delete-container'>" .
                                '<a href="index.php?state=profile&delete_auction='.  $offer->getId() . '">'.
                                '<div class="auction-item-delete">'.
                                  'Usuń Aukcje'.
                                '</div>'.
                                '</a>' .
                            "</div>" .
                        "</div>";
                }
                ?>
            </div>
            <h2>Twoje Zamówienia</h2>
            <div id="auction-container">
            <?php
            
                foreach ($_SESSION['profile_bought_data'] as $offer) {
                    echo
                    '<div class="auction-item">' .
                        "<div class='auction-item-image'>" .
                        '<img src="' . $offer->getImage() . '"/>' .
                        "</div>" .
                        "<div class='auction-item-description'>" .
                        $offer->getDescription().'<br><br>Typ: '.$offer->getType().'<br>Cena: '.$offer->getPrice().
                        "</div>" .
                        "</div>";
                }
                ?>
            </div>
            <h2>Twoje zdjęcia</h2>
            <div id="profile-image-container">
                
            </div>
        </article>
    </main>
    <?php
    include "includes/footer.php";
    ?>
</body>

</html>