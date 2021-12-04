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
        else{
        echo '<a href="index.php?state=profile">'.
            '<i class="icon-user"></i><br>'.
            'Mój Profil'.
        '</a>';
        }
        ?>
    </div>
</header>