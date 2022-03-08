<header>
    <div class="inline-header-container-left">
        <a href="index.php?state=start">
            <div id="header-image">
                <img src="images/logo.png" />
            </div>
        </a>
        <div id="header-title">RYBA-W-SIECI</div>
    </div>
    <div class="inline-header-container-right">
        <?php
        if(!isset($_SESSION['userid'])){
        echo '<a href="index.php?state=login">'.
            '<div class="header-link">Zaloguj się</div>'.
        '</a>'.
        '<a href="index.php?state=register">'.
            '<div class="header-link">Stwórz Konto</div>'.
        '</a>';        
        }
        elseif($_SESSION['permission'] == 'user'){
        echo 
        '<a href="index.php?state=add_product_user">'.
            '<i class="icon-plus-circled"></i><br>'.
            'Dodaj aukcję'.
        '</a>'.
        '<a href="index.php?state=cart"'; if(isset($_SESSION['cart'])){echo 'style="color:black"';} echo '>'.
            '<i class="icon-basket"'; if(isset($_SESSION['cart'])){echo 'style="filter:invert(100%)"';} echo '></i><br>'.
            'Mój koszyk'.
        '</a>'.
        '<a href="index.php?state=profile">'.
            '<i class="icon-user"></i><br>'.
            'Mój profil'.
        '</a>';
        }
        else{
        echo '<a href="index.php?state=add_product_admin">'.
            '<i class="icon-plus-circled"></i><br>'.
            'Dodaj produkt'.
        '</a>'.
        '<a href="index.php?state=add_news">'.
            '<i class="icon-news"></i><br>'.
            'Dodaj ogłoszenie'.
        '</a>'.
        '<a href="index.php?state=profile">'.
            '<i class="icon-user"></i><br>'.
            'Mój profil'.
        '</a>';
        }
        ?>
    </div>
</header>