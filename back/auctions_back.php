<?php
require_once "db_connect.php";
$base_query='SELECT id, name, type, state, production_year, prize, image, description FROM produkty_aukcje WHERE (0';
if(isset($_GET['bought']) && $_SESSION['permission'] == 'user'){
    if(!isset($_SESSION['cartAuctions'])){
        $_SESSION['cartAuctions']=[];
        }
    if(!key_exists($_GET['bought'],$_SESSION['cartAuctions'])){
    $_SESSION['cartAuctions']+=[$_GET['bought'] => 1];
    }
    else{
    $_SESSION['cartAuctions'][$_GET['bought']]++;
    }
}

if(isset($_GET['deleted']) && $_SESSION['permission'] == 'admin'){
    $idDeleted = $_GET['deleted'];
    $delete_auction ="DELETE FROM produkty_aukcje WHERE id='$idDeleted'";
    $deleteQuery = $db->prepare($delete_auction);
    $deleteQuery->execute();
}

if($_SERVER['REQUEST_METHOD']=="POST"){
    $flag=false;
    $flagNewOrUsed = false;
    if(isset($_POST['rods-checkbox'])){
        $flag=true;
        $base_query.=" OR type LIKE 'Wędka'";
    }
    if(isset($_POST['lines-checkbox'])){
        $flag=true;
        $base_query.=" OR type LIKE 'Linka'";
    }
    if(isset($_POST['baits-checkbox'])){
        $flag=true;
        $base_query.=" OR type LIKE 'Przynęta'";
    }
    if(isset($_POST['nets-checkbox'])){
        $flag=true;
        $base_query.=" OR type LIKE 'Sieć'";
    }
    if(isset($_POST['floats-checkbox'])){
        $flag=true;
        $base_query.=" OR type LIKE 'Spławik'";
    }
    if(isset($_POST['reels-checkbox'])){
        $flag=true;
        $base_query.=" OR type LIKE 'Kołowrotek'";
    }
    if(isset($_POST['clothes-checkbox'])){
        $flag=true;
        $base_query.=" OR type LIKE 'Ubranie'";
    }
    if(isset($_POST['shoes-checkbox'])){
        $flag=true;
        $base_query.=" OR type LIKE 'Buty'";
    }
    if(isset($_POST['seats-checkbox'])){
        $flag=true;
        $base_query.=" OR type LIKE 'Siedzenie'";
    }
    if(isset($_POST['tents-checkbox'])){
        $flag=true;
        $base_query.=" OR type LIKE 'Namiot'";
    }
    if(isset($_POST['bags-checkbox'])){
        $flag=true;
        $base_query.=" OR type LIKE 'Plecak'";
    }
    if(isset($_POST['landing-nets-checkbox'])){
        $flag=true;
        $base_query.=" OR type LIKE 'Podbierak'";
    }
    if(!$flag){
        $base_query.="=0";
    }
    $base_query.=')';

    if(isset($_POST['new-checkbox'])){
        $base_query.=" AND state='nowy'";
        $flagNewOrUsed = true;
    }
    if(isset($_POST['used-checkbox'])){
        if($flagNewOrUsed == true)
            $base_query.=" OR state='używany'";
        else
        $base_query.=" AND state='używany'";
    }
    if($_POST['production-year']!=''){
        $base_query.=" AND production_year=".$_POST['production-year'];
    }
    if($_POST['min-cost']!=''){
        $base_query.=" AND prize>".$_POST['min-cost'];
    }
    if($_POST['max-cost']!=''){
        $base_query.=" AND prize<".$_POST['max-cost'];
    }
}
else{
    $base_query.="=0)";
}
$query = $db->prepare($base_query);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
$_SESSION['itemAuctionsList']=$result;