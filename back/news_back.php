<?php

require "db_connect.php";
include "News.php";

$query = $db->prepare('SELECT * FROM ogloszenia');
$query->execute();
$result = $query->fetchALL(PDO::FETCH_ASSOC);

$selectNewsCount = $db->prepare('SELECT COUNT(*) FROM ogloszenia');
$selectNewsCount->execute();
$_SESSION['newsCount'] = $selectNewsCount->fetchColumn();

$i = 0;

foreach($result as $row)
{
    $_SESSION['newsId'][$i] = $row['id'];
    $news = new News($row['title'], $row['publication_date'], $row['description'], $row['image'], $row['id_autora']);
    $_SESSION['news'][$i] = serialize($news);
    $i++;
}