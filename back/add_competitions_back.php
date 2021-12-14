<?php

unset($_SESSION['errorTitle']);
unset($_SESSION['errorFishery']);
unset($_SESSION['errorType']);

if($_SESSION['permission'] == "admin" && $_SERVER['REQUEST_METHOD'] == "POST" && !isset($_GET['edit']))
{
    require_once "db_connect.php";
	
    $idUser = $_SESSION['userid'];
    $titleCorrect = false;
    $fisheryCorrect = false;  
    $typeCorrect = false;

    if(!empty($_POST['title']))
    {
        $title = $_POST['title'];
        $titleCorrect = true;
    }
    else
        $_SESSION['errorTitle'] = 'Należy podać tytuł!';
    
    if(!empty($_POST['fishery']))
    {
        $fishery = $_POST['fishery'];
        $fisheryCorrect = true;
    }
    else
        $_SESSION['errorFishery'] = 'Należy podać miejsce łowów!';

    if(!empty($_POST['type']))
    {
        $type = $_POST['type'];
        $typeCorrect = true;
    }
    else
        $_SESSION['errorType'] = 'Należy wprowadzić typ!';

    $date = $_POST['date'];
    $start_time = $_POST['start_time'];

	if ($titleCorrect && $fisheryCorrect && $typeCorrect) {
		$createProduct = $db->prepare('INSERT INTO zawody (title, date, fishery, start_time, type, id_autora) VALUES (:title, :date, :fishery, :start_time, :type, :id_autora)');
        $createProduct->bindValue(':title', $title);
        $createProduct->bindValue(':date', $date);
        $createProduct->bindValue(':fishery', $fishery);
        $createProduct->bindValue(':start_time', $start_time);
        $createProduct->bindValue(':type', $type);
        $createProduct->bindValue(':id_autora', $idUser);
        $createProduct->execute();
        header("location: index.php?state=zawody");
	}
}

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_GET['edit'])){

    require_once "db_connect.php";
    $id = $_POST['edit-id'];
    $title = $_POST['edit-title'];
    $date = $_POST['edit-date'];
    $fishery = $_POST['edit-fishery'];
    $start_time = $_POST['edit-start_time'];
    $type = $_POST['edit-type'];

    $query = $db->prepare("UPDATE zawody SET title=:title,date=:date,fishery=:fishery,start_time=:start_time,type=:type WHERE id=:id");
    $query->bindValue(":id", $id);
    $query->bindValue(':title', $title);
    $query->bindValue(':date', $date);
    $query->bindValue(':fishery', $fishery);
    $query->bindValue(':start_time', $start_time);
    $query->bindValue(':type', $type);
    $query->execute();
}

    