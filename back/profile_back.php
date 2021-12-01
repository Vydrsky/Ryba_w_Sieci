<?php

if(!isset($_SESSION['name']) || !isset($_SESSION['userid'])){
    header("index.php?state=login");
}

require "db_connect.php";

$query = $db->prepare("SELECT * FROM users WHERE id=:id");
$query->bindValue(":id",$_SESSION['userid']);
$query->execute();

$_SESSION['profile_user_data'] = $query->fetch(PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT * FROM produkty_aukcje AS p INNER JOIN users AS u ON p.id_autora=u.id");
$query->execute();

$_SESSION['profile_auction_data'] = $query->fetchAll(PDO::FETCH_ASSOC);