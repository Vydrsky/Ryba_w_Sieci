<html>

<head>
    <link rel="stylesheet" href="styles/main_styles.css" />
    <link rel="stylesheet" href="styles/login_styles.css">
</head>

<body>
    <?php
    include "includes/header.php";
    ?>
    <div id="main">
        <div id="inputs">
            <h4>Login:</h4>
            <input type="text" class="text_inputs" name="name" value=<?php if (isset($_SESSION['inputName'])) echo $_SESSION['inputName']; ?>> <br />
            <h4>Hasło:</h4>
            <input type="password" class="text_inputs" name="pass"><br />
            <input type="submit" class="btn" value="zaloguj" />
        </div>


    </div>
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
    <?php
    include "includes/footer.php";
    ?>
</body>

</html>