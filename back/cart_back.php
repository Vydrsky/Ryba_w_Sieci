<?php

$emptyCart = false;
$emptyAuctionsCart = false;
unset($_SESSION['cartEmpty']);

if(isset($_GET['del'])){
    unset($_SESSION['cart'][$_GET['del']]);
    if(empty($_SESSION['cart'])){
        unset($_SESSION['cart']);
        unset($_SESSION['cartContents']);
    }
}

if(isset($_GET['delAuctions'])){
    unset($_SESSION['cartAuctions'][$_GET['delAuctions']]);
    if(empty($_SESSION['cartAuctions'])){
        unset($_SESSION['cartAuctions']);
        unset($_SESSION['cartAuctionsContents']);
    }
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_GET['change'])){
        $_SESSION['cart'][$_GET['change']]=$_POST['selected-count-'.$_GET['change']];
    }
    if(isset($_GET['changeAuction'])){
        $_SESSION['cartAuctions'][$_GET['changeAuction']]=$_POST['selected-count-auctions-'.$_GET['changeAuction']];
    }
}

if(isset($_GET['buy'])){
    unset($_SESSION['cart']);
    unset($_SESSION['cartContents']);
}

if(isset($_GET['buyAuctions'])){
    unset($_SESSION['cartAuctions']);
    unset($_SESSION['cartAuctionsContents']);
}

if(isset($_SESSION['cart'])){
    require_once "db_connect.php";
    $ids="";
    foreach($_SESSION['cart'] as $key => $item){
        $ids.="id=".$key." OR ";
    }

    $ids=substr($ids,0,-3);
    $query=$db->prepare("SELECT id,name,prize,image FROM produkty_sklep WHERE ".$ids);
    $query->execute();
    $result=$query->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['cartContents']=$result;
}
else
    $emptyCart = true;

if(isset($_SESSION['cartAuctions'])){
    require_once "db_connect.php";
    $idsA="";
    foreach($_SESSION['cartAuctions'] as $key => $item){
        $idsA.="id=".$key." OR ";
    }

    $idsA=substr($idsA,0,-3);
    $queryAuctions=$db->prepare("SELECT id,name,state,production_year,prize,image FROM produkty_aukcje WHERE ".$idsA);
    $queryAuctions->execute();
    $resultAuctions=$queryAuctions->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['cartAuctionsContents']=$resultAuctions;
}
else
    $emptyAuctionsCart = true;

if($emptyCart && $emptyAuctionsCart)
    $_SESSION['cartEmpty'] = "<h3>Masz pusty koszyk :C</h3>";