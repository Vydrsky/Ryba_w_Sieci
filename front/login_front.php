<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="content">
        <h1>Logowanie</h1>
        <form method="post" action="index.php?state=login">
            <fieldset class="login">
                <div id="labels">
                    <div class="label">
                        Login:<br />
                    </div>
                    <div class="label">
                        Hasło:<br />
                    </div>
                </div>
                <div id="inputs">
                    <input type="text" class="text_inputs" name="name" value=<?php if (isset($_SESSION['inputName'])) echo $_SESSION['inputName']; ?>> <br />
                    <input type="password" class="text_inputs" name="pass"><br />
                    <input type="submit" value="zaloguj"/>
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