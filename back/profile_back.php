<?php

if (!isset($_SESSION['name']) || !isset($_SESSION['userid'])) {
    header("location: index.php?state=login");
    exit();
}


require_once "User.php";
require_once "Offer.php";
require "db_connect.php";



unset($_SESSION['new_name_error']);
unset($_SESSION['new_email_error']);
unset($_SESSION['password_confirm_error']);
//kod od formularza edycji
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['edit']) && $_GET['edit'] == 2) {
    $_SESSION['profile_input_name'] = $_POST['new_name'];
    $_SESSION['profile_input_surname'] = $_POST['new_surname'];
    $_SESSION['profile_input_login'] = $_POST['new_login'];
    $_SESSION['profile_input_email'] = $_POST['new_email'];
    $validation = true;
    if ($_POST['new_name'] == "" || $_POST['new_surname'] == "" || !ctype_alnum($_POST['new_login']) || $_POST['new_login'] == "") {
        $validation = false;
        $_SESSION['new_name_error'] = "Błędne imię ,nazwisko lub login";
    }
    if (!filter_var($_POST['new_email'], FILTER_VALIDATE_EMAIL)) {
        $validation = false;
        $_SESSION['new_email_error'] = "Błędny adres email";
    }
    $query = $db->prepare("SELECT password FROM users WHERE id=:id");
    $query->bindValue(":id", $_SESSION['userid']);
    $query->execute();
    $result = $query->fetch();

    if (sha1($_POST['confirm_password']) != $result['password']) {
        $validation = false;
        $_SESSION['password_confirm_error'] = "Błędne hasło";
    }

    if ($validation == true) {
        $query = $db->prepare("UPDATE users SET login=:login, email=:email, name=:name,surname=:surname WHERE id=:id");
        $query->bindValue(":login", $_POST['new_login']);
        $query->bindValue(":email", $_POST['new_email']);
        $query->bindValue(":name", $_POST['new_name']);
        $query->bindValue(":surname", $_POST['new_surname']);
        $query->bindValue(":id", $_SESSION['userid']);
        $query->execute();
        header("location:index.php?state=profile");
        exit();
    }
}

if(isset($_GET['delete_auction'])){
    $query = $db->prepare("DELETE FROM produkty_aukcje WHERE id=:id");
    $query->bindValue(":id",$_GET['delete_auction']);
    $query->execute();
    header("location:index.php?state=profile");
}

//kod wyswietlania danych na podstronie
$query = $db->prepare("SELECT * FROM users WHERE id=:id");
$query->bindValue(":id", $_SESSION['userid']);
$query->execute();

$result = $query->fetch(PDO::FETCH_ASSOC);
$user = new User($result['id'], $result['login'], $result['email'], $result['name'], $result['surname'], $result['permission'], $result['points'], $result['rank'], $result['profile_image']);
$_SESSION['profile_user_data'] = $user;

$query = $db->prepare("SELECT p.id AS productId,p.name,p.id_autora,p.image,p.type,p.state,p.age,p.prize FROM produkty_aukcje AS p INNER JOIN users AS u ON p.id_autora=u.id WHERE p.id_autora=:id");
$query->bindValue(":id", $_SESSION['userid']);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
$i = 0;
$_SESSION['profile_auction_data'] = array(); //empty the array
foreach ($result as $row) {
    $offer = new Offer($row['productId'], $row['id_autora'], $row['image'], $row['name'], $row['type'], $row['state'], $row['age'], $row['prize']);
    $_SESSION['profile_auction_data'][$i] = $offer;
    $i++;
}
