<?php

require "db_connect.php";
include "classes/Competitions.php";

$query = $db->prepare('SELECT zawody.id, title, date , fishery, start_time, type, users.name, users.surname FROM zawody INNER JOIN users ON users.id=zawody.id_autora');
$query->execute();
$result = $query->fetchALL(PDO::FETCH_ASSOC);

$_SESSION['competitions']=[];
foreach($result as $row)
{
    $competition = new Competitions($row['title'], $row['date'], $row['fishery'], $row['start_time'], $row['type'], $row['name']." ".$row['surname']);
    array_push($_SESSION['competitions'],$competition);
}