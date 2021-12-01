<?php

if(!isset($_SESSION['name']) || !isset($_SESSION['userid'])){
    header("index.php?state=login");
}

require_once "User.php";
require_once "Offer.php";
require "db_connect.php";

$query = $db->prepare("SELECT * FROM users WHERE id=:id");
$query->bindValue(":id",$_SESSION['userid']);
$query->execute();

$result = $query->fetch(PDO::FETCH_ASSOC);
$user = new User($result['id'],$result['login'],$result['email'],$result['name'],$result['surname'],$result['permission'],$result['points'],$result['rank'],$result['profile_image']);
$_SESSION['profile_user_data'] = $user;

$query = $db->prepare("SELECT * FROM produkty_aukcje AS p INNER JOIN users AS u ON p.id_autora=u.id");
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
$i = 0;
foreach($result as $row){
    $offer = new Offer($row['id'],$row['id_autora'],$row['image'],$row['name'],$row['type'],$row['state'],$row['age'],$row['prize']);
    $_SESSION['profile_auction_data'][$i] = $offer;
    $i++;
}