<?php
if(isset($_GET['del'])){
    unset($_SESSION['cart'][$_GET['del']]);
    if(empty($_SESSION['cart'])){
        unset($_SESSION['cart']);
        unset($_SESSION['cartContents']);
    }
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_GET['change'])){
        $_SESSION['cart'][$_GET['change']]=$_POST['selected-count-'.$_GET['change']];
    }
}

if(isset($_GET['buy'])){
    unset($_SESSION['cart']);
    unset($_SESSION['cartContents']);
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