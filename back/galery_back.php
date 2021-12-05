<?php
unset($_SESSION['galery-image-error']);
unset($_SESSION['galery-description-error']);
unset($_SESSION['galery-weight-error']);

unset($_SESSION['likes']);

require 'db_connect.php';
if (isset($_SESSION['userid'])) {
    $query = $db->prepare('SELECT name FROM users WHERE id=:id');
    $query->bindValue(':id', $_SESSION['userid']);
    $query->execute();
    $result = $query->fetch();
    $_SESSION['username'] = $result['name'];
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $_SESSION['gallery-image-input'] = $_FILES['gallery-image'];
    $_SESSION['gallery-description-input'] = $_POST['gallery-description'];
    $_SESSION['gallery-weight-input'] = $_POST['gallery-weight'];
    $validation = true;
    if ($_FILES['gallery-image']['name'] == "") {
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
        $fileDir = "images/galery/";
        $extension = pathinfo($_FILES['gallery-image']['name'], PATHINFO_EXTENSION);
        $filePath = $fileDir . $_SESSION['userid'] . sha1(basename($_FILES['gallery-image']['tmp_name'])) . "." . $extension;
        if (move_uploaded_file($_FILES['gallery-image']['tmp_name'], $filePath)) {
            $query = $db->prepare("INSERT INTO galeria_zdobyczy (opis,waga,zdjecie,polubienia,id_autora) VALUES (:opis,:waga,:zdjecie,0,:id_autora)");
            $query->bindValue(':opis', $_SESSION['gallery-description-input']);
            $query->bindValue(':waga', $_SESSION['gallery-weight-input']);
            $query->bindValue(':zdjecie', $filePath);
            $query->bindValue(':id_autora', $_SESSION['userid']);
            $query->execute();
        } else {
            $_SESSION['galery-image-error'] = "Błąd przy przesyłaniu zdjęcia";
        }
    }
}


$query = $db->prepare('SELECT id,opis,waga,zdjecie,polubienia FROM galeria_zdobyczy');
$query->execute();
$_SESSION['gallery_data'] = $query->fetchAll();

$query = $db->prepare('SELECT userid,postid FROM polubienia');
$query->execute();
$_SESSION['likes'] = $query->fetchAll();

if (isset($_GET['like'])) {
    $likedFlag = false;
    foreach ($_SESSION['likes'] as $row) {
        if ($row['userid'] == $_SESSION['userid'] && $row['postid'] == $_GET['like']) {
            $likedFlag = true;
        }
    }
    if (!$likedFlag) {
        $query = $db->prepare('UPDATE galeria_zdobyczy SET polubienia=polubienia+1 WHERE id=:id');
        $query->bindValue(":id", $_GET['like']);
        $query->execute();
        $query = $db->prepare('INSERT INTO polubienia (userid,postid) VALUES(:userid,:postid)');
        $query->bindValue(":userid", $_SESSION['userid']);
        $query->bindValue(":postid", $_GET['like']);
        $query->execute();
        header("location: index.php?state=galery");
    }
}
