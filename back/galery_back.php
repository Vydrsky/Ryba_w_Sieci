<?php
unset($_SESSION['galery-image-error']);
unset($_SESSION['galery-description-error']);
unset($_SESSION['galery-weight-error']);

require 'db_connect.php';
$query = $db->prepare('SELECT name FROM users WHERE id=:id');
$query->bindValue(':id', $_SESSION['userid']);
$query->execute();
$result = $query->fetch();
$_SESSION['username'] = $result['name'];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $_SESSION['gallery-image-input'] = $_POST['gallery-image'];
    $_SESSION['gallery-description-input'] = $_POST['gallery-description'];
    $_SESSION['gallery-weight-input'] = $_POST['gallery-weight'];
    $validation = true;
    if (empty($_POST['gallery-image'])) {
        $validation = false;
        $_SESSION['galery-image-error'] = "Wybierz zdjęcie";
    }
    if (empty($_POST['gallery-description'])) {
        $validation = false;
        $_SESSION['galery-description-error'] = "Podaj opis obrazka";
    }
    if (empty($_POST['gallery-weight'])) {
        $validation = false;
        $_SESSION['galery-weight-error'] = "Podaj wagę ryby";
    }
    if ($validation) {
        //$query = $db->prepare("INSERT INTO galeria_zdobyczy (opis,waga,zdjecie,polubienia,id_autora) VALUES (':opis',:waga,:zdjecie,0,:id_autora)");
        //$query->bindValue(':id', $_SESSION['userid']);
        //$query->execute();
        //$result = $query->fetch();
        //$_SESSION['username'] = $result['name'];
    }
}
