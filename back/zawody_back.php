<?php

require "db_connect.php";
include "Competitions.php";

$query = $db->prepare('SELECT * FROM zawody');
$query->execute();
$result = $query->fetchALL(PDO::FETCH_ASSOC);

$selectCompetitionsCount = $db->prepare('SELECT COUNT(*) FROM zawody');
$selectCompetitionsCount->execute();
$_SESSION['competitionsCount'] = $selectCompetitionsCount->fetchColumn();

$i = 0;

foreach($result as $row)
{
    $competition = new Competitions($row['title'], $row['date'], $row['fishery'], $row['start_time'], $row['type'], $row['id_autora']);
    $authorId = $row['id_autora'];
    $selectName = $db->prepare("SELECT name, surname FROM users WHERE id=$authorId");
    $selectName->execute();
    $name = $selectName->fetch(PDO::FETCH_ASSOC);
    $_SESSION['authorName'][$i] = $name['name'] . " " . $name['surname']; 
    $_SESSION['competitions'][$i] = serialize($competition);
    $i++;
}