<?php
$base_query='SELECT id,name,type,prize,image, description FROM produkty_sklep WHERE (0';
if(isset($_GET['bought'])){
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart']=[];
        }
    if(!key_exists($_GET['bought'],$_SESSION['cart'])){
    $_SESSION['cart']+=[$_GET['bought'] => 1];
    }
    else{
    $_SESSION['cart'][$_GET['bought']]++;
    }
}

if($_SERVER['REQUEST_METHOD']=="POST"){
    $flag=false;
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
require_once "db_connect.php";
$query = $db->prepare($base_query);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
$_SESSION['itemList']=$result;