<?php
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