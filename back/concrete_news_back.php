<?php

require_once "db_connect.php";
include_once "classes/News.php";

$concreteNewsId = $_GET['id'];

$query = $db->prepare("SELECT * FROM ogloszenia WHERE id='$concreteNewsId'");
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);

$concreteNews = new News($result['title'], $result['publication_date'], $result['description'], $result['image'], $result['id_autora']);
$authorId = $result['id_autora'];
$_SESSION['concreteNews'] = serialize($concreteNews);

$selectName = $db->prepare("SELECT name, surname FROM users WHERE id='$authorId'");
$selectName->execute();
$name = $selectName->fetch(PDO::FETCH_ASSOC);

$_SESSION['authorName'] = $name['name'] . " " . $name['surname']; 

