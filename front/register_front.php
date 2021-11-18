<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="content">
        <h1>Rejestracja</h1>
        <form method="post" action="index.php?state=register">
            <fieldset class="register">
                <div id="labels">
                    <div class="label">
                        E-mail:<br />
                    </div>
                    <div class="label">
                        Potwierdź adres E-mail:<br />
                    </div>
                    <div class="label">
                        Imię:<br />
                    </div>
                    <div class="label">
                        Nazwisko:<br />
                    </div>
                    <div class="label">
                        Login:<br />
                    </div>
                    <div class="label">
                        Hasło:<br />
                    </div>
                    <div class="label">
                        Potwierdź hasło:<br />
                    </div>
                    <div class="label">
                        Data Urodzenia:<br />
                    </div>
                </div>
                <div id="inputs">
                    <input type="text" class="text_inputs" name="email"> <br />
                    <input type="text" class="text_inputs" name="email2"><br />
                    <input type="text" class="text_inputs" name="name"> <br />
                    <input type="text" class="text_inputs" name="surname"><br />
                    <input type="text" class="text_inputs" name="username"> <br />
                    <input type="password" class="text_inputs" name="pass"><br />
                    <input type="password" class="text_inputs" name="pass2"> <br />
                    <input type="date" class="text_inputs" name="birthDate"><br />
                    <input type="submit" value="Utwórz konto"/>
                </div>
                <?php
                if (isset($_SESSION['nameError'])) {
                    echo "<span style='color:red;'>".$_SESSION['nameError']."</span><br>";
                }
                if (isset($_SESSION['passError'])) {
                    echo "<span style='color:red;'>".$_SESSION['passError']."</span><br>";
                }
                if (isset($_SESSION['ageError'])) {
                    echo "<span style='color:red;'>". $_SESSION['ageError']."</span><br>";
                }
                ?>
            </fieldset>
        </form>
    </div>
    <div id="footer">©Footer</div>
</body>
</html>