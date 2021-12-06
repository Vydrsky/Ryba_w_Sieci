<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Serwis Wędkarski" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/main_styles.css" />
    <link rel="stylesheet" href="styles/navigation_styles.css" />
    <link rel="stylesheet" href="styles/shop_styles.css" />
    <link rel="stylesheet" href="fontellon/css/fontello.css" />
    <link rel="icon" href="favicon.ico" />
</head>

<body>
    <?php include "includes/header.php"; ?> 
    <?php include "includes/menu.php"; ?>
    <main>
        <aside>
            <div id="filter-header">
                Filtrowanie Wyników
            </div>
            <div id="filter-form-container">
                <form method="post" action="">
                    <p>Sprzęt Rybacki:</p>
                    <input type="checkbox" name="rods-checkbox" <?php if(isset($_POST['rods-checkbox'])){echo "checked";} ?>/> Wędki<br>
                    <input type="checkbox" name="lines-checkbox" <?php if(isset($_POST['lines-checkbox'])){echo "checked";} ?> /> Żyłki<br>
                    <input type="checkbox" name="baits-checkbox" <?php if(isset($_POST['baits-checkbox'])){echo "checked";} ?> /> Przynęty<br>
                    <input type="checkbox" name="nets-checkbox" <?php if(isset($_POST['nets-checkbox'])){echo "checked";} ?> /> Sieci<br>
                    <input type="checkbox" name="floats-checkbox" <?php if(isset($_POST['floats-checkbox'])){echo "checked";} ?> /> Spławiki<br>
                    <input type="checkbox" name="reels-checkbox" <?php if(isset($_POST['reels-checkbox'])){echo "checked";} ?> /> Kołowrotki<br>
                    <p>Akcesoria:</p>
                    <input type="checkbox" name="clothes-checkbox" <?php if(isset($_POST['clothes-checkbox'])){echo "checked";} ?> /> Ubrania<br>
                    <input type="checkbox" name="shoes-checkbox" <?php if(isset($_POST['shoes-checkbox'])){echo "checked";} ?> /> Buty<br>
                    <input type="checkbox" name="seats-checkbox" <?php if(isset($_POST['seats-checkbox'])){echo "checked";} ?> /> Siedziska<br>
                    <input type="checkbox" name="tents-checkbox" <?php if(isset($_POST['tents-checkbox'])){echo "checked";} ?> /> Namioty<br>
                    <input type="checkbox" name="bags-checkbox"  <?php if(isset($_POST['bags-checkbox'])){echo "checked";} ?>/> Torby i Plecaki<br>
                    <input type="checkbox" name="landing-nets-checkbox" <?php if(isset($_POST['landing-nets-checkbox'])){echo "checked";} ?> /> Podbieraki<br>
                    <p>Cena:</p>
                    <input type="number" name="min-cost" min="0" max="999999" <?php if(isset($_POST['min-cost'])){echo "value='".$_POST['min-cost']."'";}?>/> - <input type="number" name="max-cost" min="0" max="999999"  <?php if(isset($_POST['max-cost'])){echo "value='".$_POST['max-cost']."'";}?>/><br>
                    <input type="submit" value="Potwierdź" />
                </form>
            </div>
        </aside>
        <section>
            <?php
            if (isset($_SESSION['itemList'])) {
                foreach ($_SESSION['itemList'] as $row) {
                    echo "<div id='item'>
                <div id='item-image'>
                    <img src='" . $row['image'] . "' />
                </div>
                <div id='item-content'>
                    <div id='item-description'><h3>" .
                        $row['name']
                        . "</h3></div>
                    <div id='item-info'>" .
                        $row['description'] . "<br/></br>" . "Cena: " . $row['prize'] . "zł"
                        . "</div>
                    <a href='index.php?state=shop&bought=" . $row['id'] . "' id='add-to-cart'><div id='add-to-cart'>Dodaj do Koszyka
                    </div></a>
                </div>
            </div>";
                }
            }
            ?>
        </section>
    </main>
    <?php
    include "includes/footer.php";
    ?>
</body>

</html>