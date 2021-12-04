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
    $_SESSION['gallery-image-input'] = $_FILES['gallery-image'];
    $_SESSION['gallery-description-input'] = $_POST['gallery-description'];
    $_SESSION['gallery-weight-input'] = $_POST['gallery-weight'];
    $validation = true;
    if (!isset($_FILES['gallery-image'])) {
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
        $filePath = $fileDir.$_SESSION['userid'].sha1(basename($_FILES['gallery-image']['tmp_name'])).".".$extension;
        echo $filePath;
        if(move_uploaded_file($_FILES['gallery-image']['tmp_name'],$filePath)){
            $query = $db->prepare("INSERT INTO galeria_zdobyczy (opis,waga,zdjecie,polubienia,id_autora) VALUES (:opis,:waga,:zdjecie,0,:id_autora)");
            $query->bindValue(':opis',$_SESSION['gallery-description-input']);
            $query->bindValue(':waga',$_SESSION['gallery-weight-input']);
            $query->bindValue(':zdjecie',$filePath);
            $query->bindValue(':id_autora',$_SESSION['userid']);
            $query->execute();
        }
        else{
            $_SESSION['galery-image-error'] = "Błąd przy przesyłaniu zdjęcia";
        }
    }
}


$query = $db->prepare('SELECT opis,waga,zdjecie,polubienia FROM galeria_zdobyczy');
$query->execute();
$_SESSION['gallery_data'] = $query->fetchAll();   
