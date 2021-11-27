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
                    <input type="text" class="text_inputs" name="email" required> <br />
                    <input type="text" class="text_inputs" name="email2" required><br />
                    <input type="text" class="text_inputs" name="name" required> <br />
                    <input type="text" class="text_inputs" name="surname" required><br />
                    <input type="text" class="text_inputs" name="username" required> <br />
                    <input type="password" class="text_inputs" name="pass" required><br />
                    <input type="password" class="text_inputs" name="pass2" required> <br />
                    <input type="date" class="text_inputs" name="birthDate" required><br />
                    <input type="submit" value="Utwórz konto"/>
                </div>
                <?php if(isset($_SESSION['emailError'])){echo "<p color='red'>".$_SESSION['emailError']."</p>";}
                if(isset($_SESSION['usernameError'])){echo "<p color='red'>".$_SESSION['usernameError']."</p>";}
                if(isset($_SESSION['passError'])){echo "<p color='red'>".$_SESSION['passError']."</p>";}
                if(isset($_SESSION['birthDateError'])){echo "<p color='red'>".$_SESSION['birthDateError']."</p>";}?>
            </fieldset>
        </form>
    </div>
    <div id="footer">©Footer</div>
</body>
</html>