<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Serwis Wędkarski" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/main_styles.css" />
    <link rel="stylesheet" href="styles/navigation_styles.css" />
    <link rel="stylesheet" href="styles/cart_styles.css" />
    <link rel="stylesheet" href="fontellon/css/fontello.css" />
    <link rel="icon" href="favicon.ico" />
</head>

<body>
    <?php include "includes/header.php"; ?>
    <?php include "includes/menu.php"; ?>
    <main>
        <section>
            <?php
            if(isset($_SESSION['cartContents'])){
                foreach($_SESSION['cartContents'] as $row){
            echo
            "<div id='item'>
                <div id='item-image'>
                    <img src='".$row['image']."' />
                </div>
                <div id='item-content'>
                    <div id='item-info'>".
                        $row['name']
                    ."</div>
                    <div id='item-count'>
                        <form method='post' action=''>
                            <input type='number' name='selected-count-1' min='1' max='10' value='".$_SESSION['cart'][$row['id']]."' /> </br> 
                            <input type='submit' value='Zmień'/>
                        </form>
                    </div>
                    <div id='item-prize'>".
                        $row['prize']*$_SESSION['cart'][$row['id']]."zł"
                    ."</div>
                    <div id='item-trash'>
                        <a href='index.php?state=start'>  
                        <img src='images/trash.png' />
                        </a>
                    </div>                          
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