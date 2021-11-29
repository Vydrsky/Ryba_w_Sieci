<?php
//unset($_SESSION['cart']);
if(!isset($_SESSION['cart'])){
$_SESSION['cart']=[];
}
if(isset($_GET['bought'])){
    if(!key_exists($_GET['bought'],$_SESSION['cart'])){
    $_SESSION['cart']+=[$_GET['bought'] => 1];
    }
    else{
    $_SESSION['cart'][$_GET['bought']]++;
    }
}

require_once "db_connect.php";
$query = $db->prepare('SELECT id,name,type,prize,image, description FROM produkty_sklep');
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
$_SESSION['itemList']=$result;